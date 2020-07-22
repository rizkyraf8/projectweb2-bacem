<div class="content-wrapper">
    <section class='content-header'>
        <h1>
            <b> SISTEM PEGAWAI </b>
        </h1>
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php
            if (@$content) {
                $this->load->view($content);
            }
            ?>
        </div>
    </section>
</div>