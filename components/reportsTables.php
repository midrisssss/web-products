<?php
$array = array(
    array(
        "No" => 1,
        "Tanggal" => date_create("01-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "",
        "Jenis" => array(
            "Pemasukan" => 1000000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 2,
        "Tanggal" => date_create("01-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "gaada",
        "Jenis" => array(
            "Pemasukan" => 100000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 3,
        "Tanggal" => date_create("08-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "",
        "Jenis" => array(
            "Pemasukan" => 200000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 4,
        "Tanggal" => date_create("09-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "test pemasukan pesanan 090323",
        "Jenis" => array(
            "Pemasukan" => 89000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 5,
        "Tanggal" => date_create("09-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "test pengeluaran 090323",
        "Jenis" => array(
            "Pemasukan" => 0,
            "Pengeluaran" => 21000,
        ),
    ),
    array(
        "No" => 6,
        "Tanggal" => date_create("16-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "lunas yak",
        "Jenis" => array(
            "Pemasukan" => 165000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 7,
        "Tanggal" => date_create("16-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "lunas yak",
        "Jenis" => array(
            "Pemasukan" => 330000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 8,
        "Tanggal" => date_create("15-03-2023"),
        "Kategori" => "pinjaman ulang",
        "Keterangan" => "tes",
        "Jenis" => array(
            "Pemasukan" => 100000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 9,
        "Tanggal" => date_create("16-02-2023"),
        "Kategori" => "belanja modal",
        "Keterangan" => "tes card tahun",
        "Jenis" => array(
            "Pemasukan" => 100000,
            "Pengeluaran" => 0,
        ),
    ),
    array(
        "No" => 10,
        "Tanggal" => date_create("24-03-2023"),
        "Kategori" => "pembayaran pesanan",
        "Keterangan" => "",
        "Jenis" => array(
            "Pemasukan" => 24032023,
            "Pengeluaran" => 0,
        ),
    ),
);
$totalPemasukan = 0;
$totalPengeluaran = 0;
function sum($value1, $value2)
{
    return $value1 + $value2;
}
?>
<h1 class="text-center font-bold text-5xl leading-loose">Reports Tables</h1>
<table class="container border-collapse border border-slate-700 w-full mx-auto">
    <thead>
        <tr>
            <th rowspan="2" class="p-2 border border-slate-700">No</th>
            <th rowspan="2" class="p-2 border border-slate-700">Tanggal</th>
            <th rowspan="2" class="p-2 border border-slate-700">Kategori</th>
            <th rowspan="2" class="p-2 border border-slate-700">Keterangan</th>
            <th rowspan="1" colspan="2" class="p-2 border border-slate-700">Jenis</th>
        </tr>
        <tr>
            <th class="p-2 border border-slate-700">Pemasukan</th>
            <th class="p-2 border border-slate-700">Pengeluaran</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($array as $subArray) { ?>
            <tr>
                <td class="p-2 border border-slate-700 text-center font-semibold">
                    <?= $subArray["No"] ?>
                </td>
                <td class="p-2 border border-slate-700 text-center">
                    <?= date_format($subArray["Tanggal"], "Y-m-d") ?>
                </td>
                <td class="p-2 border border-slate-700">
                    <?= $subArray["Kategori"] ?>
                </td>
                <td class="p-2 border border-slate-700">
                    <?= $subArray["Keterangan"] ?>
                </td>
                <td class="p-2 border border-slate-700 text-right">Rp
                    <?= number_format($subArray["Jenis"]["Pemasukan"]) ?>
                </td>
                <td class="p-2 border border-slate-700 text-right">Rp
                    <?= number_format($subArray["Jenis"]["Pengeluaran"]) ?>
                </td>
            </tr>
            <?php $totalPemasukan = sum($totalPemasukan, $subArray["Jenis"]["Pemasukan"]); ?>
            <?php $totalPengeluaran = sum($totalPengeluaran, $subArray["Jenis"]["Pengeluaran"]); ?>
        <?php } ?>
        <tr>
            <th colspan="4" class="p-2 border border-slate-700 text-right">Total</th>
            <td class="p-2 border border-slate-700 text-right font-semibold">Rp
                <?= number_format($totalPemasukan) ?>
            </td>
            <td class="p-2 border border-slate-700 text-right font-semibold">Rp
                <?= number_format($totalPengeluaran) ?>
            </td>
        </tr>
        <tr>
            <th colspan="4" class="p-2 border border-slate-700 text-right">Saldo</th>
            <td colspan="2" class="p-2 border border-slate-700 text-center font-semibold bg-blue-600">Rp
                <?= number_format($totalPemasukan - $totalPengeluaran) ?>
            </td>
        </tr>
    </tbody>
</table>