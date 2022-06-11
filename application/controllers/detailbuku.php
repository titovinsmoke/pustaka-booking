<?php
if($buku->stok < 1) {
    echo "<i class='btn btn-outline-primary fas fw fa-shopping-cart'> booking&nbsp;&nbsp 0</i>";
} else {
    echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart' href=' " . base_url('booking/tambahbooking/' .$buku->id) . "'> booking</a>":
}
?> 
<a class="btn btn-outline-primaryvfas fw fa-search' href="<?= base_url('home/detailbuku/' . $buku->id); ?>"> Detail</a></p>   
