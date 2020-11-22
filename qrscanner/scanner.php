
<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="instascan.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="../dashboard/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="../dashboard/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../dashboard/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../dashboard/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../dashboard/plugins/select2/select2.min.css">

    <!--  END CUSTOM STYLE FILE  -->
    <style>
        .bold{
            font-weight:bold;
            text-shadow: 2px 2px 10px #000000;
        }
    </style>

  </head>

  <body>
    
    <div class="cont ainer">
        <div class="container">
            <div class="row">
                <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
                <br>
                <br>
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row justify-content-md-center">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h2 class = "pt-3 pb-0 text-center" > EzSupply Manager </h2>
                                </div>                 
                            </div>
                        </div>
                        
                        <div class="widget-content widget-content-area">
                          <div class="container">
                            <h4 class="text-center text-dark">Qr-code scanner</h4>
                            <hr>
                            <div class="row">
                              <div class="col-md-6 col-sm-12">
                                <video id="preview" width="100%"></video>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <div class = "">  
                                  <label>Qr-code Vaule</label>
                                  <input type="text" name="text" id="text" readonly="" class="form-control">
                                  <div class = "btn-primary p-2 mt-3 text-center" id= "btn_qr" onClick="onClick(this)">GO</div>
                                </div>
                                <div class = "mt-4">
                                  <label>Barcode</label>
                                  <input type="text" name="text" id="barcode"  class="form-control">
                                  <div class = "btn-info p-2 mt-3 text-center" id = "btn_bar" onClick="onClick(this)">Search Barcode</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- <script src="instascan.min.js"></script> -->
    <script type="text/javascript">
      let scanner=new Instascan.Scanner({video:document.getElementById('preview')});
      Instascan.Camera.getCameras().then(function(cameras){
       if(cameras.length>0)
       {
        scanner.start(cameras[0]);
       }
       else
       {
        alert('no cameras Found');
       }
      }).catch(function(e){
        console.error(e);
      });

      scanner.addListener('scan',function(c){
        document.getElementById("text").value=c;
      }) 
    </script> 
    <script type="text/javascript">
      function onClick(el) {
          console.log(el.id)
          // var val = $this.previousElementSibling.value;
          // if(val == ''){
          //     console.log('no input');
          // }else{
          //   console.log(val);
          // }
      }
       
    </script> 
  </body>
</html>