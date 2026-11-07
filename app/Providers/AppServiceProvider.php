<?php

namespace App\Providers;

use App\Models\ContactMessage;
use App\Models\JobListing;
use App\Models\NewsArticle;
use App\Models\PortfolioProject;
use App\Policies\ContactMessagePolicy;
use App\Policies\JobListingPolicy;
use App\Policies\NewsArticlePolicy;
use App\Policies\PortfolioProjectPolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use SocialiteProviders\Azure\AzureExtendSocialite;
use SocialiteProviders\Manager\SocialiteWasCalled;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(SocialiteWasCalled::class, AzureExtendSocialite::class);

        // ── N+1 & Model Safety Guards ────────────────────────────────────────
        // Prevent lazy loading in non-production to catch N+1 queries early.
        // In production, lazy loads are logged instead of throwing exceptions.
        Model::preventLazyLoading(! app()->isProduction());
        Model::preventSilentlyDiscardingAttributes(! app()->isProduction());
        Model::preventAccessingMissingAttributes(! app()->isProduction());

        // ── ABAC Policies ────────────────────────────────────────────────────
        Gate::policy(NewsArticle::class, NewsArticlePolicy::class);
        Gate::policy(PortfolioProject::class, PortfolioProjectPolicy::class);
        Gate::policy(JobListing::class, JobListingPolicy::class);
        Gate::policy(ContactMessage::class, ContactMessagePolicy::class);
    }
}
