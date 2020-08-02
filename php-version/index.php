<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    
    
    <title>PlaceOrder Project</title>

    <style>
    body{
        background-color: #edebf4;
    }

    .box{
        border-radius:10px;
    }
    
    </style>


</head>
<body>

    <div class="jumbotron jumbotron-fluid bg-success text-white">
        <div class="container">
            <h1 class="display-4">PlaceOrder Project</h1>
            <p class="lead">The aim of this project is to simulate the use of any check-out order implemented within any e-commerce website.</p>
        </div>
    </div>
    <div class="container">
        <div class="row mb-3">
        
            
            <div class="col-md-8">
            <form>
                
                <div class="form-group border p-3 box bg-white">
                    <h4 class="float-left">CONTACT INFO</h4>
                    <small class="form-text text-muted float-right">*REQUIRED</small><br>   
                    <hr>
                    <label for="exampleInputEmail1">EMAIL*</label>
                    <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                </div>

                <div class="form-group border p-3 box bg-white">
                    <h4 class="float-left">SHIPPING ADDRESS</h4>
                    <small class="form-text text-muted float-right">*REQUIRED</small><br>   
                    <hr>
                    <label class="mt-2">FULL NAME*</label>
                    <input type="text" class="form-control" id="" >
                    <label class="mt-2">FULL ADDRESS*</label>
                    <input type="text" class="form-control" id="" >
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">CITY*</label>
                            <input type="text" class="form-control" id="" >
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">STATE/PROVINCE</label>
                            <input type="text" class="form-control" id="" >
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">ZIP/POSTAL CODE*</label>
                            <input type="text" class="form-control" id="" >
                        </div>
                    </div>
                    <label for="exampleInputEmail1">COUNTRY*</label>
                    <input type="text" class="form-control" id="" >
                </div>

                <div class="form-group border p-3 box bg-white">
                    <h4 class="float-left">SHIPPING METHOD</h4> <br>
                    <hr>

                    <div class="form-check border p-3 pl-5 mt-2 box">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <div class="form-check-label" for="exampleRadios1">
                            <div class="float-left">Deliver at shipping address</div>
                            <div class="float-right">23 lei</div> <br>
                        </div>
                    </div>
                    <div class="form-check border p-3 pl-5 mt-2 box">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <div class="form-check-label" for="exampleRadios2">
                            <div class="float-left">Deliver at billing address</div>
                            <div class="float-right">23 lei</div> <br>
                        </div>
                    </div>
                    <div class="form-check border p-3 pl-5 mt-2 box">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <div class="form-check-label" for="exampleRadios3">
                            <div class="float-left">Deliver in the shop main location (Address: St.Road 12)</div>
                            <div class="float-right">No tax perceived</div> <br>
                        </div>
                    </div>
                </div>

                <div class="form-group border p-3 box bg-white">
                    <h4 class="float-left">PAYMENT METHOD</h4>
                    <small id="emailHelp" class="form-text text-muted float-right">*REQUIRED</small><br>   
                    <hr>
                    <label class="mt-2">CARD NUMBER*</label>
                    <input type="text" class="form-control" id="" placeholder="1234 1234 1234 1234">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="mt-2">EXPIRATION DATE*</label>
                            <input type="text" class="form-control" id="" placeholder="MM/YY" >
                        </div>
                        <div class="col-md-6">
                            <label class="mt-2">SECURITY CODE*</label>
                            <input type="text" class="form-control" id="" placeholder="CVC" >
                        </div>
                    
                    </div>
                </div>

                <div class="form-group border p-3 box bg-white">
                    <h4 class="float-left">BILLING ADDRESS</h4>
                    <small id="emailHelp" class="form-text text-muted float-right">*REQUIRED</small><br>   
                    <hr>
                    <label class="mt-2">FULL NAME (EXACTLY AS IT APPEARS ON THE CARD)*</label>
                    <input type="text" class="form-control" id="" >
                    <label class="mt-2">FULL ADDRESS*</label>
                    <input type="text" class="form-control" id="" >
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">CITY*</label>
                            <input type="text" class="form-control" id="" >
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">STATE/PROVINCE</label>
                            <input type="text" class="form-control" id="" >
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">ZIP/POSTAL CODE*</label>
                            <input type="text" class="form-control" id="" >
                        </div>
                    </div>
                    <label for="exampleInputEmail1">COUNTRY*</label>
                    <input type="text" class="form-control" id="" >
                </div>

                <button type="submit" class="btn btn-danger col-md-12">Confirm Order</button>
            </form>
                
            <div class="alert alert-danger mt-3 text-center" role="alert">
            There was An error processing your customer info. Please try again or contact us if you continue to have problems.
            </div>
            </div>

        <div class="col-md-4">
            <div class="sticky-top">
            <div class="border box bg-white p-3">
                    <h4 class="float-left">SHOPPING CART</h4> <br>
                    <hr>
                    <label for="exampleInputEmail1">Add a new product:</label>
                    <div class="row">
                        <div class="col-md-8">
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Product 1</option>
                                <option>Product 2</option>
                                <option>etc</option>
                            </select>

                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                            <th scope="col">Clear</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                            <td>  <i class="fa fa-trash" aria-hidden="true"></i></td>
                            <td>Product 1</td>
                            <td>9 lei</td>
                            </tr>
                            <tr>

                            <td>  <i class="fa fa-trash" aria-hidden="true"></i></td>
                            <td>Product 2</td>
                            <td>7 lei</td>
                            </tr>
                            <tr>

                            <td>  <i class="fa fa-trash" aria-hidden="true"></i></td>
                            <td>Product 3</td>
                            <td>5 lei</td>
                            </tr>


                        </tbody>
                    </table>
            </div>

            <div class="border box bg-white p-3 mt-3">
            <h4 class="float-left">ORDER SUMMARY</h4> <br>
                    <hr>

                    <div class="float-left font-weight-bold">Client name:</div>
                    <div class="float-right">Name Surname</div><br>

                    <div class="float-left font-weight-bold">Client e-mail:</div>
                    <div class="float-right">name@mail.com</div><br>

                    <div class="float-left font-weight-bold">Shipping method:</div>
                    <div class="float-right">Billing address</div><br>

                    <div class="float-left font-weight-bold">SUB-TOTAL:</div>
                    <div class="float-right">21 lei</div><br>

                    <div class="float-left font-weight-bold">DELIVERY FEES:</div>
                    <div class="float-right">23 lei</div><br>

                    <div class="float-left font-weight-bold text-danger">TOTAL:</div>
                    <div class="float-right font-weight-bold text-danger">44 lei</div><br>

                    </div>

                    </div>
        </div>
        
        </div>
        </div>

    



    <div class="jumbotron jumbotron-fluid bg-success text-white text-center mb-0">
        <p class="lead">&copy; Created by Basturescu Andrei. All rights reserved.</p>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>