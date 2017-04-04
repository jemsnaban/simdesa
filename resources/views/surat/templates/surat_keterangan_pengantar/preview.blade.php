<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="/assets/letter/css/960.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/letter/css/screen.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/assets/letter/css/print-preview.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/letter/css/print.css" type="text/css" media="print" />
    <script src="/assets/letter/js/jquery.tools.min.js"></script>
    <script src="/assets/letter/js/jquery.print-preview.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">
      $(function() {
          $("#feature > div").scrollable({interval: 2000}).autoscroll();

          $('#aside').prepend('<a class="print-preview">Cetak </a>');
          $('a.print-preview').printPreview();

          var code = 80;
          $.printPreview.loadPrintPreview();
      });
    </script>
    <style>
        .page-break {
            page-break-after: always;
        }
        table {
            display: table;
        }
        tr {
            display: table-row;
        }
        .highlight {
            background-color: greenyellow;
            display: table-cell;
        }
    </style>
  </head>
  <body>
      <div id="content" class="container_12 clearfix">
        <div id="content-main" class="grid_7">

          <link href="/assets/letter/css/surat.css" rel="stylesheet" type="text/css" />

          <div>
            <table width="100%">
              <tr>
                <td><img src="/assets/dist/img/user2-160x160.jpg" alt=""  width="100" height="80" class="logo"></td>
              </tr>

              <tr>
                <td>
                   <div class="header">
                    <h4 class="kop">PEMERINTAH KABUPATEN {{ strtoupper($desa->kabupaten) }} </h4>
                    <h4 class="kop">KECAMATAN {{ strtoupper($desa->kecamatan) }} </h4>
                    <h4 class="kop">DESA {{ strtoupper($desa->nama) }}</h4>
                    <h5 class="kop2">{{ strtoupper($desa->alamat_kantor) }}</h5>

                    <div style="text-align: center;">
                      <hr>

                      <div align="center"><u><h4  class="kop">SURAT KETERANGAN</h4></u></div>
                      <div align="center"><h4  class="kop">Nomor : {{ $infos['nomor_surat'] }}</h4></div>
                    </div>
                  </div>
                </td>
              </tr>
            </table>

            <table width="100%">
              <tr>
                <td class="indentasi">Yang bertanda tangan dibawah ini {{ $desa->nama }}, Kecamatan {{ $desa->kecamatan }},
                Kabupaten {{ $desa->kecamatan }}, Provinsi {{ $desa->provinsi }} menerangkan dengan sebenarnya bahwa:  </td>
              </tr>
            </table>
            <div id="isi3">
              <table>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr></tr>
              </table>
              <table width="100%">
                <tr><td width="20%">Nama Lengkap</td><td width="2%">:</td><td width="64%">{{ $infos['pemohon_nama'] }}</td></tr>
                <tr><td>Nomor KTP</td><td>:</td><td></td></tr>
                <tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td>,  </td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td><td></td></tr>
                <tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td>RT. , RW. , Dusun , Desa , Kec. , Kab. </td></tr>
                <tr><td>Agama</td><td>:</td><td></td></tr>
                <tr><td>Status</td><td>:</td><td></td></tr>
                <tr><td>Pendidikan</td><td>:</td><td></td></tr>
                <tr><td>Pekerjaan</td><td>:</td><td></td></tr>
                <tr><td>Kewarganegaraan </td><td>:</td><td></td></tr>
                <tr><td>Keterangan </td><td>:</td><td> </td></tr>
                <tr><td>Keperluan </td><td>:</td><td> </td></tr>
                <tr><td>Berlaku mulai </td><td>:</td><td>{{ $infos['start_date'] }} sampai dengan  {{ $infos['end_date'] }}</td></tr>
              </table>
              <table width="100%">
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td><td  class="indentasi">Demikian Surat Keterangan ini  kami buat untuk dapat dipergunakan sebagaimana mestinya. </td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
              </table>
            </div>
            <table width="100%">
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td><td width="30%"></td><td  align="center">, </td></tr>
              <tr><td></td><td width="30%"></td><td align="center"> {{ $desa->nama }}</td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td></tr>
              <tr><td></td><td align="center">( {{ $desa->nama }} )</td></tr>
            </table>

          </div>
        </div>

      </div>
      <div id="aside"></div>
      <div id="footer" class="container_12"></div>
    </body>
  </html>
