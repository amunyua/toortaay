@extends('layouts.dt-1')
@section('title', 'Upload Documents')

@push('js')
    <script src="{{ asset('js/doc_manager/index.js') }}"></script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">supervisor_account</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">@yield('title')</h4>
                        <div class="toolbar">
                            <button class="btn btn-primary btn-sm" id="add-com" data-toggle="modal" data-target="#add-modal">
                                <i class="fa fa-plus"></i> Add Committee
                            </button>
                        </div>

                        <div class="material-datatables">
                            @include('layouts.common.success')
                            @include('layouts.common.warnings')
                            <table id="documents-dt" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Doc#</th>
                                    <th>Broadcast Type</th>
                                    <th>Notification Type</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Uploaded By</th>
                                    <th>Created At</th>
                                    {{--<th class="disabled-sorting text-right">Actions</th>--}}
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Doc#</th>
                                    <th>Broadcast Type</th>
                                    <th>Notification Type</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Uploaded By</th>
                                    <th>Created At</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>

    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                    </button>
                    <h4 class="modal-title"><span id="modal-slug"></span> Upload Document</h4>
                </div>
                <form action="{{ url('document-manager/upload') }}" method="post" class="form-horizontal" id="com-modal">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <div class="modal-body">
                        <div class="form-group label-floating">
                            <label class="control-label">Recipients</label>
                            <select name="recipients" class="form-control">
                                <option value="">&nbsp;</option>
                                @if(count($broadcast_types))
                                    @foreach($broadcast_types as $b_type)
                                        <option value="{{ $b_type->id }}" code="{{ $b_type->code }}">{{ $b_type->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group" id="committees" style="display: none;">
                            <label class="control-label">Select Committee(s)</label>
                            <select name="committees" class="form-control">
                                <option value="">&nbsp;</option>
                                @if(count($committees))
                                    @foreach($committees as $committee)
                                        <option value="{{ $committee->id }}">{{ $committee->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">Session</label>
                            <input type="datetime" name="session" required class="form-control"/>
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">Document Category</label>
                            <select name="doc_cat" class="form-control">
                                <option value="">&nbsp;</option>
                                @if(count($doc_cats))
                                    @foreach($doc_cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        {{--<div class="form-group">--}}
                            <div class="checkbox-radios">
                            @if(count($notification_types))
                                @foreach($notification_types as $n_type)
                                <div class="checkbox checkbox-inline">
                                    <label>
                                        <input type="checkbox" name="{{ $n_type->id }}" {{ ($n_type->code == 'PUSH') ? 'checked': ''}}>
                                        {{ $n_type->name }}
                                    </label>
                                </div>
                                @endforeach
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label">Attach File</label>
                                <input type="file" name="file" accept=".doc .pdf" required class="form-control"/>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Message (optional)</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                        </div>
                    {{--</div>--}}


                    {{--hidden fields--}}
                    <input type="hidden" name="id"/>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Upload</button>
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection