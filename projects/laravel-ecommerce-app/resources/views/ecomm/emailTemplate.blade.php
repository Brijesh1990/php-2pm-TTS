<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Message</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin:0;padding:0;background:#f3f4f6;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f3f4f6;padding:20px;">
<tr>
<td align="center">

<!-- Main Container -->
<table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 4px 10px rgba(0,0,0,0.1);">

<!-- Header GIF -->
<tr>
<td>
<img src="https://miro.medium.com/0*OckilgOyByn-x242.gif" 
style="width:100%;display:block;" alt="Welcome">
</td>
</tr>

<!-- Title -->
<tr>
<td style="padding:25px;text-align:center;">
<h2 style="margin:0;color:#111827;font-size:24px;">New Contact Message</h2>
<p style="color:#6b7280;font-size:14px;margin-top:6px;">
You received a new message from your website
</p>
</td>
</tr>

<!-- Content -->
<tr>
<td style="padding:20px 30px;">

<table width="100%" cellpadding="0" cellspacing="0">

<tr>
<td style="padding:8px 0;font-weight:bold;color:#374151;">Full Name:</td>
<td style="padding:8px 0;color:#111827;">{{ $data["fullname"] }}</td>
</tr>

<tr>
<td style="padding:8px 0;font-weight:bold;color:#374151;">Email:</td>
<td style="padding:8px 0;color:#111827;">{{ $data["email"] }}</td>
</tr>

<tr>
<td style="padding:8px 0;font-weight:bold;color:#374151;">Mobile:</td>
<td style="padding:8px 0;color:#111827;">{{ $data["mobile"] }}</td>
</tr>

<tr>
<td style="padding:8px 0;font-weight:bold;color:#374151;">Subject:</td>
<td style="padding:8px 0;color:#111827;">{{ $data["subject"] }}</td>
</tr>

<tr>
<td style="padding:8px 0;font-weight:bold;color:#374151;">Message:</td>
<td style="padding:8px 0;color:#111827;">{{ $data["message"] }}</td>
</tr>

</table>

</td>
</tr>

<!-- Divider -->
<tr>
<td style="padding:0 30px;">
<hr style="border:none;border-top:1px solid #e5e7eb;">
</td>
</tr>

<!-- Footer -->
<tr>
<td style="padding:20px 30px;text-align:center;">
<p style="font-size:13px;color:#6b7280;margin:0;">
Thank you for contacting us 🚀
</p>

<p style="font-size:12px;color:#9ca3af;margin-top:6px;">
© {{ date('Y') }} Your Website
</p>
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>