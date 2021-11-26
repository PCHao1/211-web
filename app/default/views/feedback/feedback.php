<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/default/fontawesome5/css/fontawesome.css" rel="stylesheet">
    <link href="./public/default/fontawesome5/css/solid.css" rel="stylesheet">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
            
            
            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-2 order-lg-1">
                

                <img src="/public/images/cmt/cmt1.jpeg" class="img-fluid" alt="Sample image" height = "60px">
                

              </div>
              <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">

                <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đánh giá sản phẩm</p>
                
                

                <form class="mx-1 mx-md-4" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                  	<div class="form-outline flex-fill mb-0">
                          <select name = "rate" class="form-select" aria-label="Default select example">
                          <option selected value="5">Đánh giá số sao</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select> 
               
                        </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  	<div class="form-outline flex-fill mb-0">
                        <textarea name="feedcmt" id="comment"  cols="30" rows="5" class="form-control" placeHolder="Bình luận sản phẩm" style="background-color: white;" required></textarea>
                       
                        </div>
                  </div>


                  <div class="d-flex flex-row align-items-center">
                   <p>Thêm hình ảnh</p>
                  </div>

                  
                  
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Đánh giá</button>
                  </div>

                </form>

              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</section>
</body>
</html>