@extends('ThemeCustomizer::layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>Theme Customizer</div>
        <div><button type="button" class="btn btn-sm btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal"><i data-feather="settings" style="width:15px;height:15px;"></i> Settings</button>
            <button type="button" class="btn btn-sm btn-primary float-right" data-bs-toggle="modal" data-bs-target="#custom_theme_settings"><i data-feather="settings" style="width:15px;height:15px;"></i> Custom Settings</button></div>

    </div>
    <div class="card-body">

        <table class="table">
            <thead>
                <tr>
                @isset($usercolumns)
                    @foreach ($usercolumns as $column)
                        <th scope="col">{{ ucwords(str_replace('_', ' ', $column)) }}</th>
                    @endforeach
                @endisset
                </tr>
            </thead>
            <tbody>
                @isset($users)
                    @foreach ($users as $user)
                        <tr>
                            @foreach ($usercolumns as $column)
                                <td scope="col">{{$user->$column}}</td>
                            @endforeach
                        </tr>
                    @endforeach
                @endisset
            </tbody>
            </table>
            @isset($users)
                {{$users->links()}}
            @endisset
    </div>
</div>
<div class="modal" tabindex="-1" id="exampleModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i data-feather="settings" style="width:20px;height:20px;"></i> Theme Customizer Settings</h5>
          <button type="button" class="btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="col-md-12 mb-2">
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search user...">
                    <datalist id="datalistOptions">
                            @isset($users)
                                @foreach ($users as $user)
                                    <option value="{{$user->email}}">
                                @endforeach
                            @endisset
                    </datalist>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="layout" class="col-form-label">Layout:</label>
                        <input type="text" class="form-control" id="layout" name="layout">
                    </div>
                    <div class="col-md-6">
                        <label for="color" class="col-form-label">Color:</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="font_family" class="col-form-label">Font Family:</label>
                        <input type="text" class="form-control" id="font_family" name="font_family">
                    </div>
                    <div class="col-md-6">
                        <label for="header_position" class="col-form-label">Header Position:</label>
                        <input type="text" class="form-control" id="header_position" name="header_position">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="footer_position" class="col-form-label">Footer Position:</label>
                        <input type="text" class="form-control" id="footer_position" name="footer_position">
                    </div>
                    <div class="col-md-6">
                        <label for="sidebar_position" class="col-form-label">Sidebar Position:</label>
                        <input type="text" class="form-control" id="sidebar_position" name="sidebar_position">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i data-feather="x-circle" style="width:15px;height:15px;"></i> Close</button>
          <button type="button" class="btn btn-sm btn-primary"><i data-feather="save" style="width:15px;height:15px;"></i> Save changes</button>
        </div>
      </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="custom_theme_settings">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i data-feather="settings" style="width:20px;height:20px;"></i> Theme Customizer Settings</h5>
          <button type="button" class="btn-sm btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="layout" class="col-form-label">Layout:</label>
                        <input type="text" class="form-control" id="layout" name="layout">
                    </div>
                    <div class="col-md-6">
                        <label for="color" class="col-form-label">Color:</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="font_family" class="col-form-label">Font Family:</label>
                        <input type="text" class="form-control" id="font_family" name="font_family">
                    </div>
                    <div class="col-md-6">
                        <label for="header_position" class="col-form-label">Header Position:</label>
                        <input type="text" class="form-control" id="header_position" name="header_position">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="footer_position" class="col-form-label">Footer Position:</label>
                        <input type="text" class="form-control" id="footer_position" name="footer_position">
                    </div>
                    <div class="col-md-6">
                        <label for="sidebar_position" class="col-form-label">Sidebar Position:</label>
                        <input type="text" class="form-control" id="sidebar_position" name="sidebar_position">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i data-feather="x-circle" style="width:15px;height:15px;"></i> Close</button>
          <button type="button" class="btn btn-sm btn-primary"><i data-feather="save" style="width:15px;height:15px;"></i> Save changes</button>
        </div>
      </div>
    </div>
</div>
@endsection