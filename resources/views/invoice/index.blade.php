<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Invoice PDF</title>
    </head>
    <body>
    <p style="font-size: 30px;font-weight:bold ; color:#074985; font-family:'Sofia'"> <img src="{{asset('images/student.png')}}" style="vertical-align: middle;width: 30px; height: 30px; display:inline-block"  alt="" srcset=""> BOOKIE</p>
<h1 style="vertical-align: center;  color:#074985;">Invoice</h1>
        <div class="container" style="margin-right: 100px;"  >

        <table border="1" cellpadding="10" width="100%" style="margin-bottom: 100px;" >
                        <tr>
                            <th width="40%">Product</th>
                            <th width="20%">Price</th>
                            <th width="20%">Quantity</th>
                            <th width="20%">Total Price</th>


                        </tr>
                            <tr>
                            <td >{{ $order['title'] }}</td>
                            <td >{{ $order['price'] }}</td>
                            <td >{{ $qty}}</td>
                            <td >{{ $order['price'] * $qty }}</td>

                            </tr>
                    </table>
                    <div style="position: relative">
                <h3 style="display:inline;position: absolute; left:0">Total</h3>
                 <p style="display:inline;position: absolute; right:20%">{{$order['price'] * $qty}} L.E</p>
                </div>



</div>
</div>

  </body>
</html>
