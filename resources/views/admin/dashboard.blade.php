@extends('layouts.master')

@section('title')
    Dashboard | Admin panel
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registered Entries</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody calss="table">
                                <thead class="text-primary">
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>city</th>
                                    <th>address</th>
                                    <th>pin code</th>
                                </thead>
                            </tbody>
                            <tr>
                                <td>test_1</td>
                                <td>test_2</td>
                                <td>test_3</td>
                                <td>test_4</td>
                                <td>test_5</td>
                                
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

@section('scripts')
    
@endsection
