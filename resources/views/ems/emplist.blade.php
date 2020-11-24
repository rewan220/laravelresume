
<div class="card mb-3">
    <img src="https://www.bidyaan.com/wp-content/uploads/2018/01/Education-Management-Information-System-in-Bangladesh-1024x683.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of emps</h5>
        <p class="card-text">You can find here all the informatins about emps in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Branch</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($emps as $emp)
                <tr>
                    <td>{{ $emp->branch }}</td>
                    <td>{{ $emp->firstName }}</td>
                    <td>{{ $emp->secondName }}</td>
                    <td>{{ $emp->age }}</td>
                    <td>{{ $emp->speciality }}</td>
                    <td>

                        <a href="{{ url('ems/edit/'.$emp->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ url('ems/delete/'.$emp->id) }}" class="btn btn-sm btn-danger">delete</a>
                        
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






