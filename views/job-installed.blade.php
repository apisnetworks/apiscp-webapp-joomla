@component('email.indicator', ['status' => 'success'])
Your application is installed.
@endcomponent

@component('mail::message')
{{-- Body --}}
# Howdy!

{{ $appname }} has been successfully installed on {{ $uri }}!

## Admin panel
You can access the panel at [{{$proto}}{{$uri}}/administrator]({{$proto}}{{$uri}}/administrator) using the following information:

**Login**: <code>{{ $login }}</code><br />
**Password**: <code>{{ $password }}</code>

Security is important with any application, so extra steps are taken to reduce
the risk of hackers. By default **Maximum** Fortification is enabled. Before
installing plugins, it is recommended to enable **Minimum** Fortification within
the control panel.

Here's how to do it:

1. Visit **Web** > **Web Apps** in {{PANEL_BRAND}}
2. Select {{ $appname }} installed under **{{$uri}}**
3. Select **Fortification (MIN)** under _Actions_

When you're done reapply Maximum Fortification to keep your site secure even while you sleep!
You can learn more about [Fortification technology]({{MISC_KB_BASE}}/control-panel/understanding-fortification/) within the [knowledgebase]({{MISC_KB_BASE}}).

@include('email.webapps.common-footer')
@endcomponent