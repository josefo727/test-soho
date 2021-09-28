@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('projects.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.proyectos.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.proyectos.inputs.title')</h5>
                    <span>{{ $project->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.proyectos.inputs.description')</h5>
                    <span>{{ $project->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.proyectos.inputs.logo')</h5>
                    <x-partials.thumbnail
                        src="{{ $project->logo ? \Storage::url($project->logo) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.proyectos.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $project->image ? \Storage::url($project->image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.proyectos.inputs.user_id')</h5>
                    <span>{{ optional($project->user)->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('projects.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Project::class)
                <a href="{{ route('projects.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
