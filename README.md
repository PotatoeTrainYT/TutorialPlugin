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

# Commands & Permissions | PocketMine Coding Series #2
Before we start the video, if you ever wanna check out the code of the plugin,
The link to the github is in the description.
Now lets get into the video.
Today we are adding commands to our plugin!
The first command we are making, is gonna be a heal command.
First off, we need to register a new command in our plugin.yml.
First we write commands: which gets all the commands nested inside it.
Now we put the command name wth a : after.
The name of the command im using is heal.
Now we make it a descripion.
This description is shown when you're type the command in game.
Now, lets make the command do stuff.
First we need to make a function for when a player does a command.
For this, we use onCommand().
Now, theres many ways to check the command, but i like to use a switch statement incase i wanna add more commands later.
Here, im using strtolower($command) so it changes the command the player types, to lower case.
Now lets make a case for our heal command.
Now we have this, we can add stuff to our command.
So the command is heal, so we gotta heal the player.
Todo this, we use the Player functions given by PocketMine.
(If your using PhpStorm likr me, you have to check if the sender instances of a Player
What that does is, if the command sender isnt a player, e.g. console it wont execue the command)
Now, it should give us some for functions.
To set a players health, theres 2 ways.
1. setHealth()
2. setMaxHealth()
Both do the same unless a player has extra hearts (given by custom enchants etc)
You can use which ever one fits you best, in this tutorial imma be using setMaxHealth()
If you use setHealth() you need to give it an int for the players health.
Full hearts is 20 health so you would do setHealth(20)
Forget what i said lol i was thinking of something else.
Lets just use setHealth().
Ok now it heals the player, lets send the player a message in color.
To send a player a message, we use the sendMessage() function.
Now, that sends the player a white message, lets make it green to show success.
Again, we will be using the TextFormat util.
Now we have a command that heals the player, and sends them a message.
Lets test it!
Join your server and do /heal
There is the description we put in plugin.yml
Oops, seems like we have an error, lets fix!
To fix this, we can add (string) before $command.
Actually, $label is the command so lets use that.
Lets try again.
Forgot a return type but we can fix that in a min.
Lets test the heal!
It works! now lets fix the error.
There, easy fix.
Before we finish up the video, theres on last thing.
Do you want the command for only people with the permission?
Yeah... i thought so.
Lets add permissions!
First, we register it in plugin.yml the same way as commands.
Now we put our permission name.
Now, we set the default for who should have the permission already.
op: anyone with op
true: everyone
false: no one
In this episode, imma be using op.
Now lets add permissions to the command.
Todo this, we are gonna test if the sender has a permission using the hasPermission() function.
Inside the () we add our permission in "".
Now, it only heals the player if they have the permission.
Lets add a message if they dont have the permission.
Now it sends the player a message if they dont have the permission.
Lets test it now!
Thats the end of todays video, hope you enjoyed!
Comment what you want to see next.
Like, Comment & Subscribe for more videos!
Byeeeeeee