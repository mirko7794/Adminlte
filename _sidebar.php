<?php 

$mesi = ["01" => "Gennaio",
		"02" => "Febbraio",
		"03" => "Marzo",
		"04" => "Aprile",
		"05" => "Maggio",
		"06" => "Giugno",
		"07" => "Luglio",
		"08" => "Agosto",
		"09" => "Settembre",
		"10" => "Ottobre",
		"11" => "Novembre",
		"12" => "Dicembre"];
$giorni = [ "0" => "Domenica", 
		"1" => "Luned&igrave;",
		"2" => "Marted&igrave;",
		"3" => "Mercoled&igrave;",
		"4" => "Gioved&igrave;",
		"5" => "Venerd&igrave;",
		"6" => "Sabato"
];

?>


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image" style="margin-bottom:45px;">
				<!-- <img src="dist/img/user2-160x160.jpg" class="img-circle"
					alt="User Image" />  -->
			</div>
			<div class="pull-left info" style="left:0px !important">
				<p><?php echo ucwords($_SESSION['user']['nome_visualizzato']); ?></p>
				
<?php	
		if ($_SESSION['user']['id'] == 1) {
			$chi = 1;
		} else {
			$chi = 2;
		}
		$gruppo = '';
		switch ($chi) {
			case 1:
				$gruppo = "Admin/Developer";
				break;
			case 2:
				$gruppo = "Utente";
				break;
		}
	?>
				<a href="?page=logout" class="has-tooltip" title="Effettua il logout" data-placement="right">
					<i class="fa fa-circle text-success"></i><?php echo $gruppo; ?>
				</a>
			</div>
		</div>
		<form action="?page=dashboard&action=search" method="post" id="searchD" class="sidebar-form" _lpchecked="1" style="margin: 10px 6px !important;">
			<div class="search-dashboard">
				<input type="text" name="q" class="form-control" onkeypress="if(e.keypressed==13) $('#searchD').submit()" <?php if(isset($_POST['q']) && $_GET['action'] == 'search') { print 'placeholder="'.$_POST['q'].'"'; } else { print 'placeholder="Digita e premi INVIO per cercare"'; } ?> >
			</div>
		</form>
		
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li> <?php $active=($_GET['page'] == 'dashboard')? 'active' : ''; ?>
			<li class="<?php print $active ?>"><a href="?page=dashboard"> <i class="fa fa-home"></i>
					<span>HOME</span></a>			
			<?php $active=($_GET['page'] == 'sensori')? 'active' : ''; ?>
			<li class=" <?php print $active ?>"><a href="?page=sensori"> <i class="fa fa-podcast"></i>
					<span>SENSORI</span></a>
			 <?php if($_SESSION['user']['priority'] == 1) { ?>
					<?php $active=($_GET['page'] == 'users')? 'active' : ''; ?>
				<li class="<?php print $active ?>"><a href="?page=users"> <i class="fa fa-users"></i>
						<span>UTENTI</span></a>
			<?php } ?>
	</section>
	<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">