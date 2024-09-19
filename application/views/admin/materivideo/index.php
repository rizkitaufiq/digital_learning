 <style>
     .color-1 {
         background-color: #FFF1F1;
     }

     .color-2 {
         background-color: #E2D346;
     }

     .color-3 {
         background-color: #E5E5E3;
     }

     .color-4 {
         background-color: #A5D2EB;
     }

     .color-5 {
         background-color: #E99090;
     }

     .color-6 {
         background-color: #D7E4C7;
     }

     .color-7 {
         background-color: #FFE1B4;
     }

     .color-8 {
         background-color: #E7B5FF;
     }

     .color-9 {
         background-color: #B0FFE3;
     }

     .color-10 {
         background-color: #B7C3E1;
     }
 </style>

 <body>
     <div class="p-md-2 main-bg">
         <div class="text-dark">
             <div class="row p-5 mx-5">
                 <div class="col-4 text-left">
                     <button type="button" class="btn btn-info" style="border:1px solid black; border-radius: 25px;" data-toggle="modal" data-target="#AddModal">+ Tambah Video</button>
                 </div>

                 <div class="col-4 text-center">
                     <h4>Materi Video</h4>
                 </div>

             </div>

             <div class="mx-5">
                 <div class="p-md-2 main-bg">
                     <div class="row mx-5">

                         <div class="col-sm-6 col-md-12 mt-4">

                             <?php

                                $colors = ['color-1', 'color-2', 'color-3', 'color-4', 'color-5', 'color-6', 'color-7', 'color-8', 'color-9', 'color-10'];
                                $color_index = 0;

                                $images = ['word.png', 'pc.png', 'laptop.png', 'mouse.png', 'paper.png', 'keyboard.png', 'list.png', 'abc.png', 'globe.png', 'gmail.png',];
                                $image_index = 0;

                                ?>

                             <?php if (!empty($data)) { ?>

                                 <?php foreach ($data as $item) { ?>
                                     <div class="<?php echo $colors[$color_index++]; ?> col-12 d-flex justify-content-between mb-4" style="border:1px solid black;border-radius: 25px;height:14vh;">

                                         <div class="d-flex justify-content-start m-3" style="margin-left: 1rem;">
                                             <img src="<?php echo base_url('assets/image/siswa/') . $images[$image_index++] ?>" alt="image" style="width: 65px">
                                             <p class="mt-3 text-center" style="margin-left: 2rem;"><?php echo $item->judul ?></p>
                                         </div>

                                         <div class="d-flex justify-content-center align-items-center m-3">
                                             <a class="btn btn-info fas fa-pencil m-1" style="border-radius: 8px;" data-toggle="modal" data-target="#UpdateModal" onclick="select_data(
                                                '<?= $item->id_video ?>',
                                                '<?= $item->judul ?>',
                                                '<?= $item->file_video ?>',
                                            )"></a>
                                             <a href="<?php echo base_url('Admin/MateriVideo/Page/ViewVideo/') . $item->id_video ?>" class="btn btn-info fas fa-eye m-1" style="border-radius: 8px;"></a>
                                             <a href="<?php echo base_url('Admin/MateriVideo/Download/Process/') . $item->id_video ?>" class="btn btn-info fas fa-download m-1" style="border-radius: 8px;"></a>
                                             <a href="<?php echo base_url('Admin/MateriVideo/Delete/Process/') . $item->id_video ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-info fas fa-trash m-1" style="border-radius: 8px;"></a>
                                         </div>
                                     </div>
                                 <?php } ?>

                                 <?php if (isset($links)) { ?>
                                     <?php echo $links ?>
                                 <?php } ?>

                             <?php } else { ?>

                                 <div class="second-bg col-12 d-flex justify-content-between" style="border-radius: 25px;height:9vh;">
                                     <div class="m-3">
                                         <p class="d-flex justify-content-center align-items-center text-center">Belum ada materi yang ditambahkan</p>
                                     </div>
                                 </div>

                             <?php } ?>

                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Modal Add-->
         <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog main-bg" style="border: 1px solid black;">
                 <div class="modal-content main-bg" style="border-radius: 0;">
                     <div class="modal-body">
                         <form action="<?php echo site_url('Admin/MateriVideo/Add/Process'); ?>" method="post" enctype="multipart/form-data">

                             <div class="form-group mt-2">
                                 <label for="judul">Judul Video</label>
                                 <input name="judul" type="text" class="form-control" style="border: 1px solid black;border-radius:0;" required>
                             </div>

                             <div class="form-group mt-2">
                                 <label for="file_video">Video</label>
                                 <label class="custom-file-box" for="file_video">
                                     <i class="fas fa-plus"></i>
                                 </label>
                                 <div class="form-group">
                                     <input class="custom-file-input" name="file_video" type="file" accept="video/mp4" id="file_video" required>
                                 </div>
                             </div>

                             <div class="d-flex justify-content-end align-items-end mt-2">
                                 <button type="submit" class="main-bg" style="color:black;border:none;">Simpan</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Modal Update-->
         <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog main-bg" style="border: 1px solid black;">
                 <div class="modal-content main-bg" style="border-radius: 0;">
                     <div class="modal-body">
                         <form action="<?php echo site_url('Admin/MateriVideo/Update/Process'); ?>" method="post" enctype="multipart/form-data">

                             <input id="id_video" name="id_video" type="hidden" class="form-control">

                             <div class="form-group mt-2">
                                 <label for="judul">Judul Materi</label>
                                 <input name="judul" id="judul" type="text" class="form-control" style="border: 1px solid black;border-radius:0;">
                             </div>

                             <div class="form-group mt-2">
                                 <label for="file_video">Video</label>
                                 <div class="form-group">
                                     <input name="file_video" type="file" accept="video/mp4">
                                 </div>
                             </div>

                             <div class="d-flex justify-content-end align-items-end mt-2">
                                 <button type="submit" class="main-bg" style="color:black;border:none;">Simpan</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <script type="text/javascript">
         function select_data($id_video, $judul) {
             $("#id_video").val($id_video);
             $("#judul").val($judul);
         }
     </script>

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="<?= base_url('assets/'); ?> js/bootstrap.bundle.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>

 </html>