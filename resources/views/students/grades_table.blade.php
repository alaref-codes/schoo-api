<div class="table-responsive">
    <table class="table" id="gradesTable-table">
        <thead>
        <tr>
        <th>Student Name</th>
        <th>Subject Id</th>
        <th>Degree</th>
        <th>Degree Type</th>
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($studentSubjects as $studentSubject)
            <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $studentSubject->subjects->name }}</td>
            <td>{{ $studentSubject->degree }}</td>
            <td>{{ $studentSubject->degree_type }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['studentSubjects.destroyTwo', $studentSubject->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('studentSubjects.show', [$studentSubject->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('studentSubjects.edit', [$studentSubject->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
