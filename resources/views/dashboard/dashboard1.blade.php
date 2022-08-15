@extends('layout.master')

@push('plugin-styles')
{!! Html::style('assets/css/loader.css') !!}
{!! Html::style('plugins/apex/apexcharts.css') !!}
{!! Html::style('assets/css/dashboard/dashboard_1.css') !!}
{!! Html::style('plugins/flatpickr/flatpickr.css') !!}
{!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
{!! Html::style('assets/css/elements/tooltip.css') !!}

<script src="{{asset('global_assets/js/plugins/forms/inputs/inputmask.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/uploaders/bs_custom_file_input.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/extensions/jquery_ui/core.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/tags/tagsinput.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/inputs/maxlength.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/inputs/formatter.min.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_pages/form_floating_labels.js')}}"></script>
@endpush

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-12">
                <div class="card">
                    <div class="card-header offset-5">
                        <h4>Utambulisho</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-4 offset-4 ">
                                <div>
                                </div>
                                
                                <livewire:add-pacel />


                                {{ Form::open(['route' => 'location.store']) }}
                                @method('POST')



                                <div class="form-group row">
                                
                                    <div class="col-lg-12">
                                        <input type="text" name="mteja" value="{{ isset($data) ? $data->name : ''}}"
                                            placeholder="jina la mteja" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="text" name="mpokeaji" value="{{ isset($data) ? $data->name : ''}}"
                                            placeholder="jina la mpokeaji" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-lg-12">
                                <livewire:modals.pacel-model />
                                </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-12">
                                        @if(!@empty($id))
                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs" data-toggle="modal"
                                            data-target="#myModal" type="submit">Update</button>
                                        @else
                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs"
                                            type="submit">Save</button>
                                        @endif
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@push('plugin-scripts')
{!! Html::script('assets/js/loader.js') !!}
{!! Html::script('plugins/apex/apexcharts.min.js') !!}
{!! Html::script('plugins/flatpickr/flatpickr.js') !!}
{!! Html::script('assets/js/dashboard/dashboard_1.js') !!}
@endpush

@push('custom-scripts')

@endpush