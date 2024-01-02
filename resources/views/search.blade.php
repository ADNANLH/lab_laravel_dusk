@foreach ($tasks as $task)
    <tr>
        <th>{{$task->nom}}</th>
        <td>{{$task->description}} </td>
        <td>
            <a href="{{route('edit.task' , ['id' => $task->id])}}" class="btn btn-success">Modifier</a>
            <a href="{{route('delete.task' , ['id' => $task->id])}}" class="btn btn-danger">Supprimer</a>
        </td>
    </tr>
    
@endforeach
<tr>
    <td colspan="3" aligne="center">
        {!! $tasks->links() !!}
    </td>
</tr>