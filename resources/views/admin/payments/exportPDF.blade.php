<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mobil-IN | 2022</title>
  <style>
    body{
      font-family: sans-serif;
      font-size: 11pt;
    }

    td{
      font-size: 10pt;
    }
  </style>
</head>
<body>
  
  <div>
      <h3>{{ $title = 'Payment - Reports'}}</h3>

      <p class="float-start font-medium">Tanggal : {{ now() }}</p>
      <table border="1" style="border-collapse: collapse;" cellpadding="3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">OrderID</th>
            <th scope="col">User</th>
            <th scope="col">Car Name</th>
            <th scope="col">Total</th>
            <th scope="col">Pay</th>
            <th scope="col">Information</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)    
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $item->transaction_id }}</td>
              <td>{{ $item->transaction->user->name }}</td>
              <td>{{ $item->transaction->product->name }}</td>
              <td style="font-weight: bold">Rp. {{ number_format($item->transaction->total) }}</td>
              <td style="font-weight: bold">Rp. {{ number_format($item->pay) }}</td>
              <td>{{ $item->transaction->information }}</td>
              <td class="text-center">
                @if ($item->status == 'paid')
                  <span style="color: green">{{ $item->status }}</span>
                @else
                  <span style="color: red">{{ $item->status }}</span>
                @endif
              </td>
              <td>
                  @if ($item->status == 'paid')
                    <span style="color: blue">Paid Off</span>
                  @else
                    <span href="#" style="color: green">Pay Now</span>
                  @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>