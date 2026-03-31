<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    /**
     * Instantiate a new controller instance.
     * Ensure all task routes are protected by auth middleware.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the dashboard.
     */
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        
        $totalTasks = $user->tasks()->count();
        $completedTasks = $user->tasks()->where('status', 'completed')->count();
        $pendingTasks = $user->tasks()->where('status', 'pending')->count();

        // Optional filtering of task list
        $filter = $request->query('filter', 'all');
        
        $tasksQuery = $user->tasks()->latest();
        
        if ($filter === 'completed') {
            $tasksQuery->where('status', 'completed');
        } elseif ($filter === 'pending') {
            $tasksQuery->where('status', 'pending');
        }
        
        $tasks = $tasksQuery->get();

        return view('tasks.dashboard', compact('totalTasks', 'completedTasks', 'pendingTasks', 'tasks', 'filter'));
    }

    /**
     * Display a listing of the tasks.
     * (We can use dashboard as the primary view, but having this method is good too).
     */
    public function index(Request $request)
    {
        // Re-use logic from dashboard for the task list
        return $this->dashboard($request);
    }

    /**
     * Show the form for creating a new task.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created task in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,completed',
        ]);

        Auth::user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard')->with('success', 'Task created successfully.');
    }

    /**
     * Update the specified task status.
     * Although not explicitly requested, it's useful to mark tasks complete or update them.
     */
    public function updateStatus(Request $request, $id)
    {
        $task = Auth::user()->tasks()->findOrFail($id);
        
        $request->validate([
            'status' => 'required|in:pending,completed',
        ]);
        
        $task->update([
            'status' => $request->status,
        ]);
        
        return redirect()->back()->with('success', 'Task status updated.');
    }

    /**
     * Remove the specified task from storage (Soft Delete).
     */
    public function destroy($id)
    {
        $task = Auth::user()->tasks()->findOrFail($id);
        $task->delete();

        return redirect()->route('dashboard')->with('success', 'Task deleted successfully.');
    }
}
