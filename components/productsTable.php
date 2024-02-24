<?php
$products = array(
    array("Kode" => "B001", "Nama Barang" => "Laptop Asus", "Harga" => 9000000, "Jumlah" => 3),
    array("Kode" => "B002", "Nama Barang" => "Keyboard Logitech", "Harga" => 850000, "Jumlah" => 4),
    array("Kode" => "B003", "Nama Barang" => "Speaker", "Harga" => 500000, "Jumlah" => 6),
    array("Kode" => "B004", "Nama Barang" => "Printer Epson", "Harga" => 3000000, "Jumlah" => 7)
);

function subTotal($harga, $value)
{
    $total = $harga * $value;
    return $total;
}

$total = 0;
?>
<h1 class="text-center font-bold text-5xl leading-loose">Products Table</h1>
<table class="container border-collapse border border-slate-700 w-full mx-auto">
    <thead>
        <tr class="bg-indigo-500">
            <th class="border border-slate-700 p-2">No</th>
            <th class="border border-slate-700 p-2">Kode</th>
            <th class="border border-slate-700 p-2">Nama Barang</th>
            <th class="border border-slate-700 p-2">Harga</th>
            <th class="border border-slate-700 p-2">Jumlah</th>
            <th class="border border-slate-700 p-2">Sub Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0 ?>
        <?php foreach ($products as $product) { ?>
            <tr class="hover:bg-blue-400">
                <td class="border border-slate-700 text-center p-2 font-semibold">
                    <?= ++$i ?>
                </td>
                <td class="border border-slate-700 text-center p-2">
                    <?= $product['Kode'] ?>
                </td>
                <td class="border border-slate-700 p-2">
                    <?= $product['Nama Barang'] ?>
                </td>
                <td class="border border-slate-700 text-right p-2">
                    Rp.
                    <?= number_format($product['Harga']) ?>
                </td>
                <td class="border border-slate-700 text-center p-2">
                    <?= $product['Jumlah'] ?>
                </td>
                <td class="border border-slate-700 text-right p-2">
                    Rp.
                    <?= number_format($subTotal = subTotal($product['Harga'], $product['Jumlah'])) ?>
                </td>
            </tr>
            <?php $total += $subTotal ?>
        <?php } ?>
        <tr>
            <th class="border border-slate-700 text-right p-2 bg-indigo-500" colspan="5">TOTAL</th>
            <td class="border border-slate-700 text-right p-2 bg-red-500 font-semibold">
                Rp.
                <?= number_format($total) ?>
            </td>
        </tr>
    </tbody>
</table>