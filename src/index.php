<?php require 'includes/db.php'; $title='Dashboard';
$employees=$conn->query("SELECT COUNT(*) c FROM employees")->fetch_assoc()['c'];
$assets=$conn->query("SELECT COUNT(*) c FROM assets")->fetch_assoc()['c'];
$tickets=$conn->query("SELECT COUNT(*) c FROM tickets WHERE status IN ('Open','In Progress')")->fetch_assoc()['c'];
$available=$conn->query("SELECT COUNT(*) c FROM assets WHERE status='Available'")->fetch_assoc()['c'];
$recent=$conn->query("SELECT t.*,e.name employee FROM tickets t LEFT JOIN employees e ON e.id=t.employee_id ORDER BY t.id DESC LIMIT 6");
require 'includes/header.php'; ?>
<section class="hero"><div><span>● LIVE OPERATIONS</span><h2>Good day, Admin 👋</h2><p>Monitor employees, assets and support tickets from one place.</p></div><a class="btn white" href="tickets.php">+ New Ticket</a></section>
<div class="stats"><div><small>Employees</small><strong><?=$employees?></strong><small>Registered staff</small></div><div><small>Total Assets</small><strong><?=$assets?></strong><small>Tracked devices</small></div><div><small>Open Tickets</small><strong><?=$tickets?></strong><small>Needs attention</small></div><div><small>Available Assets</small><strong><?=$available?></strong><small>Ready to assign</small></div></div>
<section class="panel"><div class="head"><div><h3>Recent Service Tickets</h3><p>Latest support activity from RDS MySQL</p></div><a href="tickets.php">View all →</a></div><table><tr><th>Ticket</th><th>Issue</th><th>Employee</th><th>Priority</th><th>Status</th></tr>
<?php while($r=$recent->fetch_assoc()): ?><tr><td><b><?=htmlspecialchars($r['ticket_number'])?></b></td><td><?=htmlspecialchars($r['title'])?></td><td><?=htmlspecialchars($r['employee']??'—')?></td><td><i class="<?=strtolower($r['priority'])?>"><?=htmlspecialchars($r['priority'])?></i></td><td><em><?=htmlspecialchars($r['status'])?></em></td></tr><?php endwhile; ?></table></section><?php require 'includes/footer.php'; ?>