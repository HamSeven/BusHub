@foreach($locations as $location)

    <tr>
        <td>{{ $location->id }}</td>
        <td>{{ $location->name }}</td>
        <td>{{ $location->price }}</td>
        <td>
            <button type="button" value="{{ $location->id }}" class="btn btn-primary editbtn btn-sm update_location_form" data-bs-toggle="modal" data-bs-target="#updateModal"
            data-id="{{$location->id}}"
            data-name="{{$location->name}}"
            data-price="{{$location->price}}">Edit</button>
            <button type="button" class="btn btn-danger deletebtn btn-sm delete_location" data-id="{{ $location->id }}">Delete</button>

        </td>
    </tr>
@endforeach
