@extends('layouts.app')

@section('title', ' - A fictional dining experience')

@section('content')
<h4 class="intro">Ficitional dining at its finest</h4>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<img src="/images/patio.jpg" class="home">
<div class="menu-categories">
    @foreach ($categories as $cat)
    <article>
        <a href="/menu#{{str_slug($cat->name)}}"><img src="/images/{{$cat->image}}"></a>
        <h2><a href="/menu#{{str_slug($cat->name)}}">{{$cat->name}}</a></h2>
    </article>
    @endforeach
</div>
<div class="social">
    <div>
        <h4>Time Out says ⭐⭐⭐⭐⭐</h4>
        <p>
            <br>A meal at Nadia's is more than the sum of its parts. It's an experience that begins with the ceremony of the Champagne trolley and ends with a take-home bag of coffee beans and biscotti. It's the professionalism of the service, honed over a lifetime, and the opulent setting of 85-year-old murals and chandeliers. For the most part, the food is a heightened experience, too. A lusty jumble of cuttlefish and cannellini beans comes draped in curls of salty-sweet lardo. Maltagliati di pane with bug meat and capers gets an umami punch from colatura. For dessert, a shiny sphere cracks to reveal peach foam, roast peach and prosecco jelly. And while the restaurant will leave your wallet lighter, downstairs you can dine on Tuscan-style steaks and pasta in the Grill, or slip in for coffee, wine and cocktails in the Cellar Bar, where the same sense of Italian hospitality prevails.</br>
            <br> - Brad Fakeman
        </p>
    </div>
    <div class="networks">
        <a href="#"><img src="/images/twitter.png"></a>
        <a href="#"><img src="/images/fb.png"></a>
        <a href="#"><img src="/images/ig.png"></a>
    </div>
</div>
@endsection