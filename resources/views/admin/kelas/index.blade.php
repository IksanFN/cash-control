<x-admin-layout title="Kelas">
    @section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0 px-3 pt-2">
                <div class="card-body">
                  <h5 class="fw-medium text-green">Kelas</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0 px-3 mt-3">
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label class="mb-1">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label class="mb-1">Description</label>
                                    <textarea name="" class="form-control"></textarea>
                                </div>
                                <div class="row mx-0 mb-2">
                                    <button type="submit" class="btn btn-secondary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mt-3 border-0 px-3 pt-2">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name Class</th>
                                            <th style="max-width: 100px">Description</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>X RPL 1</td>
                                            <td style="max-width: 150px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, assumenda.</td>
                                            <td class="text-center"><a href="" class="btn btn-primary">Edit</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    </x-admin-layout>