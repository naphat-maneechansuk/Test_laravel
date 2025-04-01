<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>data</title>
</head>
<body>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">manage</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $item => $user)
              <tr>
                <th scope="row">{{ $item + 1 }}</th>
                <td>{{ $user->name }}</td>
                <td>
                <a href="{{ url('/data', $user->id)}}">
                    <button >แก้ไข</button>
                </a>
                <form action="{{ url('/data')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <button >ลบ</button>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <a href="{{ url('/create_view')}}">เพิ่ม</a>
</body>
</html>
