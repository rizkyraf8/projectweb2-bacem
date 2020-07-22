<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Moch Irfan Fadhila</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Available</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Data Master</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?= base_url("pegawai") ?>"><i class="fa fa-link"></i> <span>Pegawai</span></a></li>
            <li><a href="<?= base_url("department") ?>"><i class="fa fa-link"></i> <span>Department</span></a></li>
            <li><a href="<?= base_url("cabang") ?>"><i class="fa fa-link"></i> <span>Cabang</span></a></li>
            <li class="header">Transaksi</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="<?= base_url("pengajuan_cuti") ?>"><i class="fa fa-link"></i> <span>Pengajuan Cuti</span></a></li>
            <li><a href="<?= base_url("pengajuan_sakit") ?>"><i class="fa fa-link"></i> <span>Pengajuan Sakit</span></a></li>
            <li class="header">Laporan</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="<?= base_url("lap_cuti") ?>"><i class="fa fa-link"></i> <span>Laporan Cuti</span></a></li>
            <li><a href="<?= base_url("lap_sakit") ?>"><i class="fa fa-link"></i> <span>Laporan Sakit</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>