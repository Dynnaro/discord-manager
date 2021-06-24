<?php

namespace App\DiscordCommands;

use App\AppColor;
use App\DiscordAction;
use App\DiscordEmbedField;

class HelpDiscordCommand
{
    public function execute(DiscordAction $discordAction): void
    {
        $discordAction->botTalkWithEmbed(
            color: AppColor::ThemeBlue,
            title: 'These are some cool & easy commands you can use:',
            fields: [
                new DiscordEmbedField('!connect', 'Connect your FREEIAM account with Discord and keep them in sync. (recommended)'),
                new DiscordEmbedField('!twitter', 'Connect your FREEIAM account with Twitter to easily save Cards and start Challenges. (recommended)'),
                // Dedicated crypto channels are currently disabled
                // new DiscordEmbedField('!crypto', 'Get access to the crypto channels within our Discord server.'),
                new DiscordEmbedField('!welcome', 'Let me welcome someone. 👋'),
                new DiscordEmbedField('!insult', 'I can insult someone for you as well! 👀'),
            ]
        );
    }
}
