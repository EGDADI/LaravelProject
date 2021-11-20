
@extends('master')
@section("content")


<div class="custom-products">
    <div class="col-sm-10">
      <table class="table table-bordered">
   <tbody>
     <tr>
       <td>Amount</td>
       <td>{{$total}}$</td>
     </tr>
     <tr>
       <td>Tax</td>
       <td>0 $</td>
     </tr>
     <tr>
       <td>Delevry</td>
       <td>10 $</td>
     </tr>
     <tr>
       <td>Total amount</td>
       <td>{{$total + 10}} $</td>
     </tr>
   </tbody>
 </table>
  <div>
    <form action="/orderplace" method="post">
      @csrf
  <div class="form-group">
    <textarea name="address"placeholder="enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label> <br> <br>
    <input type="radio" value="cash" name="payment"><span> online payment</span> <br> <br>
    <input type="radio" value="cash" name="payment"><span> EMI payment</span> <br> <br>
    <input type="radio" value="cash" name="payment"><span> Payment on delevry</span> <br> <br>
  </div>
  <button type="submit" class="btn btn-success">Order now</button>
</form>
</div>
</div>
</div>



@endsection
