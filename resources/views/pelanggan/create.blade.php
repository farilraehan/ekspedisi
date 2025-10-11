@extends('layouts.base')
@section('content')
    <div class="col-md-12">
        <div class="card" style="border-radius:20px; overflow:hidden;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="email2">Email Address</label>
                            <select class="form-control select2" id="email2" name="email">
                                <option value="">-- Pilih Email --</option>
                                <option value="user1@email.com">user1@email.com</option>
                                <option value="user2@email.com">user2@email.com</option>
                                <option value="user3@email.com">user3@email.com</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action" style="text-align: right;">
                <button class="btn btn-danger">Cancel</button>
                <button class="btn btn-success">Simpan</button>
            </div>

        </div>
    </div>
@endsection
