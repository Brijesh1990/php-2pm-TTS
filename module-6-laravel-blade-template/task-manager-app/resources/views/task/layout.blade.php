<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: #f8f9fa;
      font-family: "Segoe UI", sans-serif;
    }

    .dashboard {
      max-width: 420px;
      margin: auto;
      min-height: 100vh;
      background: #fff;
      padding: 20px;
      position: relative;
    }

    .task-card {
      border-radius: 14px;
      padding: 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
      margin-bottom: 16px;
    }

    .task-important {
      background: #FFC43D;
      color: #000;
    }

    .task-normal {
      background: #fff;
    }

    .task-info {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .task-icon {
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: rgba(255,255,255,0.4);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .toggle-circle {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      border: 3px solid #fff;
    }

    .toggle-off {
      border-color: #ddd;
    }

    .fab {
      position: absolute;
      bottom: 25px;
      left: 50%;
      transform: translateX(-50%);
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background: #FFC43D;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
      color: #000;
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    .section-label {
      font-size: 12px;
      color: #999;
      margin: 20px 0 10px;
    }

    .fab {
  position: absolute;
  bottom: 25px;
  left: 50%;
  transform: translateX(-50%);
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: #FFC43D;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  color: #000;
  box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

  </style>
</head>

<body>

<!-- Sidebar (Offcanvas) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <li class="mb-3"><i class="bi bi-house me-2"></i> Dashboard</li>
      <li class="mb-3"><i class="bi bi-check2-square me-2"></i> Tasks</li>
      <li class="mb-3"><i class="bi bi-person me-2"></i> Profile</li>
      <li class="mb-3"><i class="bi bi-gear me-2"></i> Settings</li>
    </ul>
  </div>
</div>

<!-- Dashboard -->
<div class="dashboard">
  <!-- Header -->
  <div class="d-flex align-items-center mb-4">
    <button class="btn p-0 me-3" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
      <i class="bi bi-list fs-3"></i>
    </button>
  </div>
  <h4 class="fw-bold">Good Evening</h4>
  <p class="text-muted mb-4">Sharanya!</p>

  <!-- content start here  -->
  @yield('content')   

  <!-- Floating Action Button -->
  <button class="fab" data-bs-toggle="modal" data-bs-target="#addTaskModal">
    <i class="bi bi-plus"></i>
  </button>

</div>

<!-- create a add task model -->
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4">

      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold">Add New Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <form>

          <div class="mb-3">
            <label class="form-label">Task Title</label>
            <input type="text" class="form-control" placeholder="Enter task title" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Task Type</label>
            <select class="form-select">
              <option>Important</option>
              <option>To Do</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" class="form-control">
          </div>

          <div class="row">
            <div class="col-6 mb-3">
              <label class="form-label">Start Time</label>
              <input type="time" class="form-control">
            </div>
            <div class="col-6 mb-3">
              <label class="form-label">End Time</label>
              <input type="time" class="form-control">
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="3" placeholder="Optional"></textarea>
          </div>

          <button type="submit" class="btn btn-warning w-100 fw-semibold">
            Add Task
          </button>

        </form>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
