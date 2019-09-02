<!DOCTYPE html>
<html lang="pt-br">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="author" content="Wagner Sousa">
          <title>Home do Servidor</title>

          <!-- Bootstrap core CSS -->
          <link href="assets/css/bootstrap.min.css" rel="stylesheet">
          <link href="assets/css/bootswatch/yeti/bootstrap.min.css" rel="stylesheet">

          <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

     </head>
     <body class="bg-light">
          <main class="container" role="main">
               <div class="row m- m-md-5 p-md-4 bg-white shadow">  
                    <div class="w-100">
                         <div class="list-group list-group-horizontal">
                              <a href="index.php" class="list-group-item list-group-item-action d-flex justify-content-center active w-50"><span class="font-weight-bold"><i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;&nbsp;Atualizar Página</span></a>
                              <a href="/phpmyadmin/" class="list-group-item list-group-item-action list-group-item-info d-flex justify-content-center active w-50"><span class="font-weight-bold"><i class="fa fa-database"></i>&nbsp;&nbsp;&nbsp;&nbsp;phpMyAdmin</span></a>
                         </div>
                         <div class="list-group">
                              <?php
                              if ($diretorio = opendir("./"))
                              {
                                   while(false !== ($pasta = readdir($diretorio)))
                                   {
                                        if(is_dir($pasta) and ($pasta != ".") and ($pasta != ".."))
                                        {
                                             if ($pasta == 'frameworks')
                                             {

                                             }
                                             elseif ($pasta != 'assets')
                                             {
                                                  echo "<a href='$pasta' target='_blank' class='list-group-item list-group-item-action d-flex w-100 justify-content-between'><span><i class='fa fa-globe'></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong class='font-weight-bold'>$pasta</strong></span><span><small>Projeto</small></span></a>";
                                             }
                                             else
                                             {
                                                  echo "<a href='$pasta' target='_blank' class='list-group-item list-group-item-action d-flex w-100 justify-content-between disabled'><span><i class='fa fa-globe'></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong class='font-weight-bold'>$pasta</strong></span><span><small>Pasta de Sistema</small></span></a>";
                                             }
                                        }
                                   }
                                   closedir($diretorio);
                              }
                              ?>
                         </div>
                    </div>
               </div>
          </main>

          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/bootstrap.bundle.min.js"></script>


     </body>
</html>     