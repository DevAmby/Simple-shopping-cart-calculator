<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Shopping Cart</title>
        
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <style>
            /* #width:hover{
                border-color: blue;
            }

            #width:hover{
                border-left-color: blue;
            } */

            input[type = "number"]{
                border: none;
            }

            input:hover{
                border: 1px  solid black;
            }

            .total-price{
                background-color: #eff3f6;
                text-align: center;
                font-size: 2rem;
            }
            
            .add-to-cart{
                font-size: 1rem;
            }
           

        </style>



</head>
<body>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
    
                    <!-- <h4 class="mt-0 header-title">Default Tabs</h4>
                    <p class="text-muted mb-4 font-14">Use the tab JavaScript plugin—include
                        it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                        file—to extend our navigational tabs and pills to create tabbable panes
                        of local content, even via dropdown menus.</p> -->


    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Shop by Room Size</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Shop by Quantity</a>
                        </li>
                       
                    </ul>
    

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active pt-3" id="home" role="tabpanel">

                        <form name="orderform" id="orderform">
                            <table class="table table-bordered ">
                                
                                <tbody>

                                <tr>
                                    <td style="font-size: 1.3rem;">Unit Price for a Rubber Floor </td>
                                    <td class="col-sm-2" >
                                        <span style="font-size: 1.3rem;"> $30.00 </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td >Room Width (ft)</td>
                                    <td class="col-sm-2" >
                                         <input class="form-control" type="number" placeholder="0"  onChange="subTotal();"  id="room_width" name="room_width">
                                    
                                    </td>
                                </tr>
                                

                                <tbody>
                                    <tr>
                                        <td >Room Length (ft)</td>
                                        <td class="col-sm-2" >
                                             <input class="form-control" type="number" onChange="subTotal();" placeholder="0" id="room_length" name="room_length">
                                        
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="total-price mt-4 p-3" >
                            <b>Total</b>
                            <input class="form-control" name="roomTotal" type="number" placeholder="0"  disabled id="roomTotal" style="text-align: center; font-size:1.5rem;" >
                        </div>


                        <button type="button" class="btn btn-primary waves-effect waves-light col-sm-12 mt-3 add-to-cart">Add to Cart</button>
                        </div>
                    </form>

                        <div class="tab-pane pt-3" id="profile" role="tabpanel">
                            <form id="orderform2" name="orderform2">
                            <table class="table table-bordered">
                                
                                <tbody>

                                <tr>
                                    <td style="font-size: 1.3rem;">Unit Price for a Rubber Floor </td>
                                    <td class="col-sm-2" id="width">
                                        <span style="font-size: 1.3rem;"> $30.00 </span>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td > Corner Tiles </td>
                                    <td class="col-sm-2" id="width">
                                         <input class="form-control" type="number" placeholder="0"  id="cornerTiles" name="cornerTiles" >
                                    
                                    </td>
                                </tr>

                                <tbody>
                                    <tr>
                                        <td >Border Tiles</td>
                                        <td class="col-sm-2" id="width">
                                             <input class="form-control" type="number" placeholder="0"  id="borderTiles" name="borderTiles" >
                                        
                                        </td>
                                    </tr>

                               
                                </tbody>


                                <tbody>
                                    <tr>
                                        <td >Center Tiles</td>
                                        <td class="col-sm-2" id="width">
                                             <input class="form-control" type="number" placeholder="0" onChange="subTotal2();"  id="centerTiles" name="centerTiles">
                                        
                                        </td>
                                    </tr>

                               
                                </tbody>
                            </table>

                            <div class="total-price mt-4 p-3" >
                            <b>Total</b>
                            <input class="form-control" type="number" placeholder="0" disabled id="totalPrice2" name="totalPrice2" style="text-align: center; font-size:1.5rem;" >
                        </div>


                        <button type="button" class="btn btn-primary waves-effect waves-light col-sm-12 mt-3 add-to-cart">Add to Cart</button>
                        
                        </form>
<!-- 
                        <div data-bind="visible: roomWidthInFeet() > 0 &amp;&amp; roomLengthInFeet() > 0" class="options-container" style="display: none;">
                <input id="recommended-option-1" type="radio" name="recommended-option" value="1" data-bind="checked: selectedRecommendation">
                <label for="recommended-option-1">
                    <span class="bold">Option 1</span>
                    <span data-bind="text: recommendedDimensions">23' 0" × 1' 11"</span>
                    <span>Corner Tiles: <span data-bind="text: recommendedCornerQuantity">0</span></span>
                    <span>Border Tiles: <span data-bind="text: recommendedBorderQuantity">20</span></span>
                    <span>Center Tiles: <span data-bind="text: recommendedCenterQuantity() + recommendedExtraQuantity()">1</span></span>
                </label>
                <input id="recommended-option-2" type="radio" name="recommended-option" value="2" data-bind="checked: selectedRecommendation">
                <label for="recommended-option-2">
                    <span class="bold">Option 2</span>
                    <span data-bind="text: recommendedDimensions2">24' 11" × 3' 10"</span>
                    <span>Corner Tiles: <span data-bind="text: recommendedCornerQuantity2">4</span></span>
                    <span>Border Tiles: <span data-bind="text: recommendedBorderQuantity2">0</span></span>
                    <span>Center Tiles: <span data-bind="text: recommendedCenterQuantity2() + recommendedExtraQuantity2()">1</span></span>
                </label>
                <div class="mobile-padding gray" data-bind="visible: showExtraQuantityMessage" style="margin-top: 5px; display: none;">
                    Extra center tiles have been included on this option to satisfy the minimum quantity requirement (<span data-bind="text: productInfo().minQty() ">1</span>)
                </div>
            </div> -->
                    </div>
    
                </div>
            </div>
        </div>

    </div>



        



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <!-- XEditable Plugin -->
        <!-- <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
        <script src="assets/pages/xeditable.js"></script> -->

        <!-- App js -->
        <script src="assets/js/app.js"></script>









        <script>



            function subTotal() {
               
            var unitPrice = 30;
            var roomWidth = document.orderform.room_width.value;
            var roomLength = document.orderform.room_length.value;
            totalPrice = parseInt(roomWidth) * parseInt(roomLength) * parseInt(unitPrice);
            document.orderform.roomTotal.value = totalPrice.toFixed(2);
            return totalPrice;
            }


            
            function subTotal2() {
               
               var unitPrice2 = 30;
               var corner_tiles = document.orderform2.cornerTiles.value;
               var border_tiles = document.orderform2.borderTiles.value;
               var center_tiles = document.orderform2.centerTiles.value;
               
               var tilesTotal = parseInt(corner_tiles) + parseInt(border_tiles)  + parseInt(center_tiles);
               totalPrice2 = tilesTotal * unitPrice2;
               document.orderform2.totalPrice2.value = totalPrice2.toFixed(2);
               return totalPrice2;
               }


        </script>
</body>
</html>