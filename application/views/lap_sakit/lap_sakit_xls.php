<table border="1"  width="100%">
    <thead>
        <tr align="center">
            <td colspan="5"><h1>Laporan Sakit</h1></td>
        </tr>
        <tr align="center" >
            <td width="30" bgcolor="#CCCCCC"><b>No</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>Start Date</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>End Date</b></td>
            <td width="100" bgcolor="#CCCCCC"><b>Surat Sakit</b></td>
            <td width="250" bgcolor="#CCCCCC"><b>Keterangan</b></td>
        </tr>
    </thead>     
    <tbody>
    <?php
        $no = 1;
        foreach($data as $data) {
    ?>
        <tr>
            <td align="center"><?= $no ?></td>
            <td align="center"><?= $data['start_date'] ?></td>
            <td align="center"><?= $data['end_date'] ?></td>
            <td align="center"><?= $data['surat_sakit'] ?></td>
            <td align="center"><?= $data['keterangan'] ?></td>
        </tr>
    <?php
        $no++;
        }
    ?>
    </tbody>
</table>