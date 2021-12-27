<div class="aside-workspace my-5 p-5" id="kt_aside_workspace">
    <div class="d-flex h-100 flex-column">
        <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px" style="height: 941px;">
            @include('partials.sidebar.workspace.projects')
            @include('partials.sidebar.workspace.menu')
            @include('partials.sidebar.workspace.subscription')
            @include('partials.sidebar.workspace.tasks')
            @include('partials.sidebar.workspace.notifications')
            @include('partials.sidebar.workspace.authors')
        </div>
    </div>
    @include('partials.sidebar.workspace.footer')
</div>
