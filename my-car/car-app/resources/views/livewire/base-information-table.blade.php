    <div class="container">
        <hr />
        <h4>Base Information</h4>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Attribute</th>
                        <th scope="col">Value</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($attributes->isEmpty())
                        <tr>
                            <td colspan="3">No data entry...</td>
                        </tr>
                    @endif

                    @foreach ($attributes as $attribute)
                        <tr wire:key="{{ $attribute->id }}">
                            <td>{{ $attribute->attribute }}</td>
                            <td>{{ $attribute->value }}</td>
                            <th>
                                <div class="d-flex">
                                    <a href="#" class="mx-1 small text-success">Edit</a>
                                    <a href="#" class="mx-1 small text-danger">Delete</a>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
