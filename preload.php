<?php
/**
 * Preloader Script 2.x.
 */
$files = [
    '/var/www/html/app/Helpers/BackupEncryption.php',
    '/var/www/html/app/Helpers/Helpers.php',
    '/var/www/html/app/Http/Kernel.php',
    '/var/www/html/app/Providers/AuthServiceProvider.php',
    '/var/www/html/app/Providers/BroadcastServiceProvider.php',
    '/var/www/html/app/Providers/EmailBlacklistServiceProvider.php',
    '/var/www/html/app/Traits/UsersOnlineTrait.php',
    '/var/www/html/app/Http/Middleware/PreventRequestsDuringMaintenance.php',
    '/var/www/html/app/Http/Middleware/TrimStrings.php',
    '/var/www/html/app/Observers/UserObserver.php',
    '/var/www/html/app/Providers/AppServiceProvider.php',
    '/var/www/html/app/Providers/EventServiceProvider.php',
    '/var/www/html/app/Providers/RouteServiceProvider.php',
    '/var/www/html/app/Http/Middleware/Http2ServerPush.php',
    '/var/www/html/app/Models/User.php',
    '/var/www/html/app/Providers/CacheUserProvider.php',
    '/var/www/html/app/Http/Middleware/EncryptCookies.php',
    '/var/www/html/app/Http/Middleware/UpdateLastAction.php',
    '/var/www/html/app/Http/Middleware/VerifyCsrfToken.php',
    '/var/www/html/app/Traits/Auditable.php',
    '/var/www/html/app/Http/Controllers/Controller.php',
    '/var/www/html/app/Http/Middleware/Authenticate.php',
    '/var/www/html/app/Http/Middleware/CheckIfBanned.php',
    '/var/www/html/app/Http/Middleware/TwoStepAuth.php',
    '/var/www/html/app/Traits/TwoStep.php',
    '/var/www/html/app/Helpers/CacheUser.php',
    '/var/www/html/app/Http/Middleware/SetLanguage.php',
    '/var/www/html/app/Models/Chatroom.php',
    '/var/www/html/app/Models/ChatStatus.php',
    '/var/www/html/app/Models/UserEcho.php',
    '/var/www/html/app/Models/Language.php',
    '/var/www/html/app/Models/Page.php',
    '/var/www/html/app/Models/Bot.php',
    '/var/www/html/app/Models/Message.php',
    '/var/www/html/app/Repositories/ChatRepository.php',
    '/var/www/html/app/Models/UserAudible.php',
    '/var/www/html/app/Http/Controllers/API/ChatController.php',
    '/var/www/html/app/Models/Group.php',
    '/var/www/html/app/Http/Livewire/QuickSearchDropdown.php',
    '/var/www/html/app/Exceptions/Handler.php',
    '/var/www/html/app/Helpers/StringHelper.php',
    '/var/www/html/app/Models/Category.php',
    '/var/www/html/app/Models/Peer.php',
    '/var/www/html/app/Models/Warning.php',
    '/var/www/html/app/Http/Controllers/HomeController.php',
    '/var/www/html/app/Http/Middleware/RedirectIfAuthenticated.php',
    '/var/www/html/app/Helpers/HiddenCaptcha.php',
    '/var/www/html/app/Http/Controllers/Auth/LoginController.php',
    '/var/www/html/app/Exceptions/TrackerException.php',
    '/var/www/html/app/Helpers/Bencode.php',
    '/var/www/html/app/Http/Controllers/AnnounceController.php',
    '/var/www/html/app/Models/Torrent.php',
    '/var/www/html/app/Http/Resources/ChatMessageResource.php',
    '/var/www/html/app/Http/Resources/ChatRoomResource.php',
    '/var/www/html/app/Http/Resources/ChatUserResource.php',
    '/var/www/html/app/Http/Resources/BotResource.php',
    '/var/www/html/app/Models/Movie.php',
    '/var/www/html/app/Models/Resolution.php',
    '/var/www/html/app/Models/Type.php',
    '/var/www/html/app/Models/PersonalFreeleech.php',
    '/var/www/html/app/Models/Genre.php',
    '/var/www/html/app/Models/FreeleechToken.php',
    '/var/www/html/app/Models/Bookmark.php',
    '/var/www/html/app/Models/Thank.php',
    '/var/www/html/app/Models/Comment.php',
    '/var/www/html/app/Models/Company.php',
    '/var/www/html/app/Models/Cast.php',
    '/var/www/html/app/Helpers/Bbcode.php',
    '/var/www/html/app/Models/Collection.php',
    '/var/www/html/app/Models/FeaturedTorrent.php',
    '/var/www/html/app/Models/Article.php',
    '/var/www/html/app/Http/Controllers/TorrentController.php',
    '/var/www/html/app/Http/Middleware/CheckForModo.php',
    '/var/www/html/app/Models/Poll.php',
    '/var/www/html/app/Http/Resources/UserEchoResource.php',
    '/var/www/html/app/Http/Resources/UserAudibleResource.php',
    '/var/www/html/app/Models/History.php',
    '/var/www/html/app/Http/Controllers/UserController.php',
    '/var/www/html/app/Models/Post.php',
    '/var/www/html/app/Models/Topic.php',
    '/var/www/html/app/Models/UserPrivacy.php',
    '/var/www/html/app/Models/BonTransactions.php',
    '/var/www/html/app/Helpers/SystemInformation.php',
    '/var/www/html/app/Http/Controllers/Staff/HomeController.php',
    '/var/www/html/app/Listeners/LoginListener.php',
    '/var/www/html/app/Models/Tv.php',
    '/var/www/html/app/Http/Livewire/SmallBookmarkButton.php',
    '/var/www/html/app/Http/Livewire/TorrentListSearch.php',
    '/var/www/html/app/Helpers/ByteUnits.php',
    '/var/www/html/app/Http/Controllers/BonusController.php',
    '/var/www/html/app/Interfaces/ByteUnitsInterface.php',
    '/var/www/html/app/Models/Keyword.php',
    '/var/www/html/app/Helpers/Linkify.php',
    '/var/www/html/app/Http/Livewire/ThankButton.php',
    '/var/www/html/app/Models/Playlist.php',
    '/var/www/html/app/Models/Audit.php',
    '/var/www/html/app/Models/Subtitle.php',
    '/var/www/html/app/Models/Follow.php',
    '/var/www/html/app/Helpers/MediaInfo.php',
    '/var/www/html/app/Helpers/Nfo.php',
    '/var/www/html/app/Http/Livewire/BookmarkButton.php',
    '/var/www/html/app/Models/Recommendation.php',
    '/var/www/html/app/Models/TorrentFile.php',
    '/var/www/html/app/Models/Crew.php',
    '/var/www/html/app/Http/Controllers/PageController.php',
    '/var/www/html/app/Services/Tmdb/Client/Movie.php',
    '/var/www/html/app/Http/Controllers/Auth/RegisterController.php',
    '/var/www/html/app/Models/Note.php',
    '/var/www/html/app/Models/Invite.php',
    '/var/www/html/app/Http/Controllers/Staff/ModerationController.php',
    '/var/www/html/app/Models/Network.php',
    '/var/www/html/app/Models/TorrentRequest.php',
    '/var/www/html/app/Models/Watchlist.php',
    '/var/www/html/app/Helpers/BBCodeConverter.php',
    '/var/www/html/app/Helpers/Markdown.php',
    '/var/www/html/app/Helpers/MarkdownExtra.php',
    '/var/www/html/app/Models/BonExchange.php',
    '/var/www/html/app/Http/Controllers/AchievementsController.php',
    '/var/www/html/app/Services/Tmdb/Client/TV.php',
    '/var/www/html/app/Http/Controllers/NotificationController.php',
    '/var/www/html/app/Models/PrivateMessage.php',
    '/var/www/html/app/Http/Controllers/TicketController.php',
    '/var/www/html/app/Http/Controllers/Staff/ChatBotController.php',
    '/var/www/html/app/Http/Controllers/ArticleController.php',
    '/var/www/html/app/Http/Livewire/TicketSearch.php',
    '/var/www/html/app/Models/Ticket.php',
    '/var/www/html/app/Http/Controllers/Auth/ForgotPasswordController.php',
    '/var/www/html/app/Http/Controllers/Staff/VersionController.php',
    '/var/www/html/app/Http/Controllers/Staff/CheaterController.php',
    '/var/www/html/app/Http/Controllers/Staff/UserController.php',
    '/var/www/html/app/Http/Livewire/SimilarTorrent.php',
    '/var/www/html/app/Http/Controllers/SubtitleController.php',
    '/var/www/html/app/Models/MediaLanguage.php',
    '/var/www/html/app/Http/Controllers/PrivateMessageController.php',
    '/var/www/html/app/Listeners/FailedLoginListener.php',
    '/var/www/html/app/Http/Livewire/UserSearch.php',
    '/var/www/html/app/Http/Controllers/ForumController.php',
    '/var/www/html/app/Models/Forum.php',
    '/var/www/html/app/Models/Permission.php',
    '/var/www/html/app/Repositories/TaggedUserRepository.php',
    '/var/www/html/app/Models/Season.php',
    '/var/www/html/app/Http/Controllers/MediaHub/MovieController.php',
    '/var/www/html/app/Events/Chatter.php',
    '/var/www/html/app/Http/Controllers/Staff/FlushController.php',
    '/var/www/html/app/Achievements/UserFilled100Requests.php',
    '/var/www/html/app/Achievements/UserFilled25Requests.php',
    '/var/www/html/app/Achievements/UserFilled50Requests.php',
    '/var/www/html/app/Achievements/UserFilled75Requests.php',
    '/var/www/html/app/Achievements/UserMade100Comments.php',
    '/var/www/html/app/Achievements/UserMade100Posts.php',
    '/var/www/html/app/Achievements/UserMade100Uploads.php',
    '/var/www/html/app/Achievements/UserMade200Comments.php',
    '/var/www/html/app/Achievements/UserMade200Posts.php',
    '/var/www/html/app/Achievements/UserMade200Uploads.php',
    '/var/www/html/app/Achievements/UserMade25Posts.php',
    '/var/www/html/app/Achievements/UserMade25Uploads.php',
    '/var/www/html/app/Achievements/UserMade300Comments.php',
    '/var/www/html/app/Achievements/UserMade300Posts.php',
    '/var/www/html/app/Achievements/UserMade300Uploads.php',
    '/var/www/html/app/Achievements/UserMade400Comments.php',
    '/var/www/html/app/Achievements/UserMade400Posts.php',
    '/var/www/html/app/Achievements/UserMade400Uploads.php',
    '/var/www/html/app/Achievements/UserMade500Comments.php',
    '/var/www/html/app/Achievements/UserMade500Posts.php',
    '/var/www/html/app/Achievements/UserMade500Uploads.php',
    '/var/www/html/app/Achievements/UserMade50Comments.php',
    '/var/www/html/app/Achievements/UserMade50Posts.php',
    '/var/www/html/app/Achievements/UserMade50Uploads.php',
    '/var/www/html/app/Achievements/UserMade600Comments.php',
    '/var/www/html/app/Achievements/UserMade600Posts.php',
    '/var/www/html/app/Achievements/UserMade600Uploads.php',
    '/var/www/html/app/Achievements/UserMade700Comments.php',
    '/var/www/html/app/Achievements/UserMade700Posts.php',
    '/var/www/html/app/Achievements/UserMade700Uploads.php',
    '/var/www/html/app/Achievements/UserMade800Comments.php',
    '/var/www/html/app/Achievements/UserMade800Posts.php',
    '/var/www/html/app/Achievements/UserMade800Uploads.php',
    '/var/www/html/app/Achievements/UserMade900Comments.php',
    '/var/www/html/app/Achievements/UserMade900Posts.php',
    '/var/www/html/app/Achievements/UserMade900Uploads.php',
    '/var/www/html/app/Achievements/UserMadeComment.php',
    '/var/www/html/app/Achievements/UserMadeFirstPost.php',
    '/var/www/html/app/Achievements/UserMadeTenComments.php',
    '/var/www/html/app/Achievements/UserMadeUpload.php',
    '/var/www/html/app/Http/Controllers/MediaHub/NetworkController.php',
    '/var/www/html/app/Http/Controllers/GraveyardController.php',
    '/var/www/html/app/Http/Livewire/GraveyardSearch.php',
    '/var/www/html/app/Http/Livewire/SubtitleSearch.php',
    '/var/www/html/app/Http/Livewire/MovieSearch.php',
    '/var/www/html/app/Http/Controllers/MediaHub/HomeController.php',
    '/var/www/html/app/Models/Person.php',
    '/var/www/html/app/Http/Controllers/Staff/ChatStatusController.php',
    '/var/www/html/app/Http/Controllers/Staff/SeedboxController.php',
    '/var/www/html/app/Models/Seedbox.php',
    '/var/www/html/app/Traits/Encryptable.php',
    '/var/www/html/app/Bots/SystemBot.php',
    '/var/www/html/app/Http/Controllers/Staff/AuditController.php',
    '/var/www/html/app/Events/MessageDeleted.php',
    '/var/www/html/app/Events/MessageSent.php',
    '/var/www/html/app/Models/TicketCategory.php',
    '/var/www/html/app/Models/TicketPriority.php',
    '/var/www/html/app/Http/Controllers/Staff/NoteController.php',
    '/var/www/html/app/Http/Controllers/Staff/WarningController.php',
    '/var/www/html/app/Models/FailedLoginAttempt.php',
    '/var/www/html/app/Notifications/FailedLogin.php',
    '/var/www/html/app/Http/Controllers/Staff/InviteController.php',
    '/var/www/html/app/Models/Internal.php',
];

foreach ($files as $file) {
    try {
        if (! (is_file($file) && is_readable($file))) {
            continue;
        }
        opcache_compile_file($file);
    } catch (\Throwable $e) {
        echo 'Preloader Script has stopped with an error:'.\PHP_EOL;
        echo 'Message: '.$e->getMessage().\PHP_EOL;
        echo 'File: '.$file.\PHP_EOL;

        throw $e;
    }
}
