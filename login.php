<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <!-- Section: Design Block -->
                <section class="background-radial-gradient overflow-hidden">
                    <style>
                        .background-radial-gradient {
                            background-color: hsl(218, 41%, 15%);
                            background-image: radial-gradient(650px circle at 0% 0%,
                                    hsl(218, 41%, 35%) 15%,
                                    hsl(218, 41%, 30%) 35%,
                                    hsl(218, 41%, 20%) 75%,
                                    hsl(218, 41%, 19%) 80%,
                                    transparent 100%),
                                radial-gradient(1250px circle at 100% 100%,
                                    hsl(218, 41%, 45%) 15%,
                                    hsl(218, 41%, 30%) 35%,
                                    hsl(218, 41%, 20%) 75%,
                                    hsl(218, 41%, 19%) 80%,
                                    transparent 100%);
                        }

                        #radius-shape-1 {
                            height: 220px;
                            width: 220px;
                            top: -60px;
                            left: -130px;
                            background: radial-gradient(#44006b, #ad1fff);
                            overflow: hidden;
                        }

                        #radius-shape-2 {
                            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                            bottom: -60px;
                            right: -110px;
                            width: 300px;
                            height: 300px;
                            background: radial-gradient(#44006b, #ad1fff);
                            overflow: hidden;
                        }

                        .bg-glass {
                            background-color: hsla(0, 0%, 100%, 0.9) !important;
                            backdrop-filter: saturate(200%) blur(25px);
                        }
                    </style>

                    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                        <div class="row gx-lg-5 align-items-center mb-5">
                            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                    The best offer <br />
                                    <span style="color: hsl(218, 81%, 75%)">for your business</span>
                                </h1>
                                <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Temporibus, expedita iusto veniam atque, magni tempora mollitia
                                    dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                                    ab ipsum nisi dolorem modi. Quos?
                                </p>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                                <div class="card bg-glass">
                                    <div class="card-body px-4 py-5 px-md-5">
                                        <form>
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            

                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form3Example3" class="form-control"  name="email" placeholder="Enter the correct email id"/>
                                                <label class="form-label" for="form3Example3">Email address</label>
                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" id="form3Example4" class="form-control"name="password"  placeholder="Enter the correct password" />
                                                <label class="form-label" for="form3Example4">Password</label>
                                            </div>

                                            <!-- Checkbox -->
                                           

                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                                Sign up
                                            </button>

                                            <!-- Register buttons -->
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

    $('form').submit(
        function(){
            var formData= new FormData(this);
            formData.append('key','Login');
           $.ajax(
                 {
                    
                    url: "mathopr_ajax.php",
                    type: "post",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(resp) {
                      var data=JSON.parse(resp);
                     var text=data['text'];
                     var response=data['response'];
                     alert(text);
                     if(response==1) {
                       
                        window.open('https://www.linkedin.com/in/sumit-kumar-ab47a9225/','_blank');
                     }else {
                        $('#form3Example3').val('');
                        $('#form3Example4').val('');
                        $('#form3Example3').css('background-color','red');
                        $('#form3Example4').css('background-color','red');
                     }
                     
                       
                    }
                 }
           )
           return false;
        }
       

    )
</script>

</html>