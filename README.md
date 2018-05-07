# The Basics | PocketMine Coding Series #1
Hey guys! Welcome back to another video on my channel.
If you know, a few weeks ago i started a coding series.
Well... im restarting that because i made loads of errors,
And i wasnt clear about what i was doing.
So today imma be restarting the series to hopefully teach someone
To learn to code plugins!

## plugin.yml
First, in any plugin we need a plugin.yml.
What this does, it holds all the info about the plugin
for the server to load it and get the name etc.
Lets make a new file named plugin.yml.
Now inside this file, we need to add some things.
You can format this hover you like, i just have a favoured way.
Now we have the stuff we need, imma explain what each are,
and what you put in them
name: This is the name of your plugin, so i would put TutorialPlugin
description: A brief description of your plugin, so imma write a description
main: The file root to your main file, what i usually do is do PluginName\Main
version: The version of the plugin
api: The API of PocketMine the plugin uses. (3.0.0-ALPHA12 is latest API)
        if you want to ad multiple APIs, you make it in an array. Now our plugin uses 2 APIs
author: The author/creator of the plugin. You can write whatever, usually a nick name or your IGN

## Main file root
Now we have finished with our plugin.yml, we now need to make our main file.
But first, we need to make some folders.
The first folder you make is called src.
Now, inside this src folder, we make a folder named the first thing in main
Now we have that, lets make our main file.

## Plugin functions
Now we getting on to the fun stuff!
First off, any main file needs to extend PluginBase.
What PluginBase does, is gives us functions for the plugin.
Like onEnable(), its called when the plugin enables.
Lets add it to our code.
Now we have this function for when the plugin loads, it doesnt do anything yet.
Lets log a message to console saying our plugin has enabled.
First off, we need to get the plugins logger.
Now we have the logger, we can send different types of messages to console.
In this tutorial, we are going to be using info.
It requires us to put in a string for the message to be logged.
In the "" you can put whatever you like.
Now, we have made the plugin log to console when our plugin loads! 
Lets test it
It worked! But dont you thnk that message looks a bit boring?
Lets add some color!
To do this, we need to use PocketMines TextFormat util.
Now, we add it to our code using TextFormat::COLOR_NAME.
Easy enough? Lets add a green color to our enable message.
Lets test it again
Now we have a nice, green message when our plugin enables!
Lets do the same for when it disables, but this time lets make it red.
Lets test it. Its nice right?

This is the end of episode 1, Next episode we will be making commands!
Like, Comment & Subscribe for more videos like this.
Byeeeeeeee