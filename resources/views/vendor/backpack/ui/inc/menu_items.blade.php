{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Excursions" icon="la la-question" :link="backpack_url('excursion')" />
<x-backpack::menu-item title="Transports" icon="la la-question" :link="backpack_url('transport')" />
<x-backpack::menu-item title="Organizers" icon="la la-question" :link="backpack_url('organizer')" />