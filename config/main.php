<?php 
include "koneksi.php";
if($_GET['page'] == '') {
    include "home.php";
}else if($_GET['page'] == 'kajian') {
    include "page/kajian/kajian.php";
}else if($_GET['page'] == 'tambahK') {
    include "page/kajian/tambahK.php";
}else if($_GET['page'] == 'editK') {
    include "page/kajian/editK.php";
}else if($_GET['page'] == 'hapusK') {
    include "page/kajian/hapusK.php";
}//wisata nagari
else if($_GET['page'] == 'wisata') {
    include "page/wisata/wisata.php";
}else if($_GET['page'] == 'tambahWs') {
    include "page/wisata/tambahWs.php";
}else if($_GET['page'] == 'editWs') {
    include "page/wisata/editWs.php";
}else if($_GET['page'] == 'hapusWs') {
    include "page/wisata/hapusWs.php";
}//data wilayah
else if($_GET['page'] == 'wilayah') {
    include "page/wilayah/wilayah.php";
}else if($_GET['page'] == 'tambahW') {
    include "page/wilayah/tambahW.php";
}else if($_GET['page'] == 'editW') {
    include "page/wilayah/editW.php";
}else if($_GET['page'] == 'hapusW') {
    include "page/wilayah/hapusW.php";
}//data penduduk
else if($_GET['page'] == 'penduduk') {
    include "page/penduduk/penduduk.php";
}else if($_GET['page'] == 'tambahP') {
    include "page/penduduk/tambahP.php";
}else if($_GET['page'] == 'editP') {
    include "page/penduduk/editP.php";
}else if($_GET['page'] == 'hapusP') {
    include "page/penduduk/hapusP.php";
}//pengumuman
else if($_GET['page'] == 'agenda') {
    include "page/agenda/agenda.php";
}else if($_GET['page'] == 'tambahA') {
    include "page/agenda/tambahA.php";
}else if($_GET['page'] == 'editA') {
    include "page/agenda/editA.php";
}else if($_GET['page'] == 'hapusA') {
    include "page/agenda/hapusA.php";
}//kas masuk
else if($_GET['page'] == 'masuk') {
    include "page/masuk/masuk.php";
}else if($_GET['page'] == 'tambahM') {
    include "page/masuk/tambahM.php";
}else if($_GET['page'] == 'editM') {
    include "page/masuk/editM.php";
}else if($_GET['page'] == 'hapusM') {
    include "page/masuk/hapusM.php";
}else if($_GET['page'] == 'rekapitulasi') {
    include "page/masuk/kas.php";
}//kas keluar
else if($_GET['page'] == 'keluar') {
    include "page/keluar/keluar.php";
}else if($_GET['page'] == 'tambahKa') {
    include "page/keluar/tambahKa.php";
}else if($_GET['page'] == 'editKa') {
    include "page/keluar/editKa.php";
}else if($_GET['page'] == 'hapusKa') {
    include "page/keluar/hapusKa.php";
}// }user
else if($_GET['page'] == 'user') {
    include "page/user/user.php";
} 
else if($_GET['page'] == 'tambahU') {
    include "page/user/tambahU.php";
}
else if($_GET['page'] == 'editU') {
    include "page/user/editU.php";
}
else if($_GET['page'] == 'hapusU') {
    include "page/user/hapusU.php";
}