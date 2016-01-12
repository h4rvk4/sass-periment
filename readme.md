# sass-periment

**This is just a repo for learning, not for making something useful.**

Though I'm mostly a backend developer, I think it's good to know how Frontend-Devs work these days.
So, I started to play around with SASS in my last holidays.

And, yes, I know, my design skills are really bad.

If you want to drop me a note or improve my code, please open a issue or a pull request.

## "Framework"

I have to excuse myself, normally I write better PHP code, but since this is just a playground for SASS, everything is a little bit messy here.

It was really challenging not to work in the familiar environment. I guess this is a bad sign but that's not the point here.

Please ignore all directories except /compass.

## Implementation

### SCSS

I hate "languages" which use tabs other than brackets. Tabs are for formatting, brackets are for bracing.
That's why YAML and Python suck - and that's why the old SASS-Syntax sucks, too, so I'm just using the scss-Syntax for my stylesheets.

### 7-1 Structure

I have to admit, I love a good code structure. So I decided to use the [7-1-Pattern](http://sass-guidelin.es/#the-7-1-pattern), it's nice! :D

### Spriting (with compass)

I really don't have a clue what's happening here (something I actually hate), but it works.

(I guess I would understand it, if I would debug/dig in it, but I accept that it's working - for now.)

## Open Questions

### Module?

While reading I found in some 'config.rb's something like:

	module Sass::Script::Functions
	module Compass::SassExtensions::Functions::Sprites
	module Compass::SassExtensions::Sprites::SpriteMethods
	
What are these for? Overwritten methods? Hooks? Just more magical stuff?
To which house does compass belong btw? Slytherin? "Sass" sounds even a bit like parseltongue.

### @extend

So much more black magic! But why does @extend not handle nested selectors?
This would make stuff so much easier (and much more fail-save).
Currently I think @import is a much better friend than @extend.

### Spriting: without compass?

Is there really no way to do spriting without compass (or any other tool that's not sass itself)?

I think spriting is one of the most important things these days. And compass is "just" a framework.
A framework should just make things easier (and of cause, it does, no question).
But there should always be a "hard way" solution without the framework.
E.g. jQuery and Javascript. Everything jQuery does, I can do in plain JS, too. It would be more work/code, but I could do it.

This does not mean I don't want to use compass, I just want to know if I have to.

### Spriting: "smart"

I use these settings for the spriting layout:

	$bricks-layout: smart;
	$covers-layout: smart;
    
But compass puts all images in one vertical row. Is it just me or isn't this very smart?
(Okay, the house Slytherin doesn't have many smart members, maybe that's the problem.)

## Resources

My gradients were "inspired" by these tutorials:

* [https://css-tricks.com/html5-progress-element/](https://css-tricks.com/html5-progress-element/)
* [http://blog.teamtreehouse.com/use-meter-progress-elements](http://blog.teamtreehouse.com/use-meter-progress-elements)
* [http://www.cssmatic.com/gradient-generator](http://www.cssmatic.com/gradient-generator)