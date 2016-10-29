<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nume</th>
                <th>Prenume</th>
                 <th>Media<</th>
            </tr>
            </thead>
            <tbody>
                @foreach($customers as $key => $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                     <td>{{$customer->nume}}</td>
                      <td>{{$customer->prenume}}</td>
                       <td>{{$customer->media}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
    </body>
</html>
