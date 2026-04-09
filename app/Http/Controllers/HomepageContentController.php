<?php

namespace App\Http\Controllers;

use App\Support\HomepageContentManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomepageContentController extends Controller
{
    public function update(Request $request, HomepageContentManager $homepageContentManager): RedirectResponse
    {
        $validated = $request->validate([
            'brand.name' => ['required', 'string', 'max:120'],
            'brand.subtitle' => ['required', 'string', 'max:120'],
            'seo.title' => ['required', 'string', 'max:255'],
            'seo.description' => ['required', 'string', 'max:320'],
            'menuDrawer.kicker' => ['required', 'string', 'max:120'],
            'menuDrawer.title' => ['required', 'string', 'max:255'],
            'menuDrawer.body' => ['required', 'string'],
            'menuDrawer.buttonLabel' => ['required', 'string', 'max:120'],
            'hero.eyebrow' => ['required', 'string', 'max:120'],
            'hero.title' => ['required', 'string', 'max:255'],
            'hero.subtitle' => ['required', 'string'],
            'hero.image' => ['required', 'string', 'max:255'],
            'hero.buttons.primary' => ['required', 'string', 'max:120'],
            'hero.buttons.secondary' => ['required', 'string', 'max:120'],
            'hero.breadcrumbs' => ['required', 'array', 'size:3'],
            'hero.breadcrumbs.*' => ['required', 'string', 'max:120'],
            'hero.stats' => ['required', 'array', 'size:3'],
            'hero.stats.*.value' => ['required', 'string', 'max:120'],
            'hero.stats.*.label' => ['required', 'string', 'max:255'],
            'featured.badgeTop' => ['required', 'string', 'max:120'],
            'featured.badgeYear' => ['required', 'string', 'max:32'],
            'featured.title' => ['required', 'string', 'max:255'],
            'featured.subtitle' => ['required', 'string'],
            'story.eyebrow' => ['required', 'string', 'max:120'],
            'story.title' => ['required', 'string', 'max:255'],
            'story.panelKicker' => ['required', 'string', 'max:120'],
            'story.panelTitle' => ['required', 'string', 'max:255'],
            'story.paragraphs' => ['required', 'array', 'size:2'],
            'story.paragraphs.*' => ['required', 'string'],
            'story.panelItems' => ['required', 'array', 'size:4'],
            'story.panelItems.*' => ['required', 'string', 'max:255'],
            'journeysSection.kicker' => ['required', 'string', 'max:120'],
            'journeysSection.title' => ['required', 'string', 'max:255'],
            'journeysSection.intro' => ['required', 'string'],
            'experiencesSection.kicker' => ['required', 'string', 'max:120'],
            'experiencesSection.title' => ['required', 'string', 'max:255'],
            'experiencesSection.intro' => ['required', 'string'],
            'tailorBand.kicker' => ['required', 'string', 'max:120'],
            'tailorBand.title' => ['required', 'string', 'max:255'],
            'tailorBand.body' => ['required', 'string'],
            'tailorBand.buttonLabel' => ['required', 'string', 'max:120'],
            'faqSection.kicker' => ['required', 'string', 'max:120'],
            'faqSection.title' => ['required', 'string', 'max:255'],
            'faqSection.intro' => ['required', 'string'],
            'footer.intro' => ['required', 'string'],
            'footer.chatTitle' => ['required', 'string', 'max:120'],
            'footer.chatBody' => ['required', 'string', 'max:255'],
            'destinations' => ['required', 'array', 'size:3'],
            'destinations.*.title' => ['required', 'string', 'max:255'],
            'destinations.*.region' => ['required', 'string', 'max:120'],
            'destinations.*.summary' => ['required', 'string'],
            'destinations.*.image' => ['required', 'string', 'max:255'],
            'destinations.*.cta' => ['required', 'string', 'max:120'],
            'signatureJourneys' => ['required', 'array', 'size:2'],
            'signatureJourneys.*.tag' => ['required', 'string', 'max:120'],
            'signatureJourneys.*.meta' => ['required', 'string', 'max:120'],
            'signatureJourneys.*.duration' => ['required', 'string', 'max:120'],
            'signatureJourneys.*.title' => ['required', 'string', 'max:255'],
            'signatureJourneys.*.summary' => ['required', 'string'],
            'signatureJourneys.*.image' => ['required', 'string', 'max:255'],
            'signatureJourneys.*.cta' => ['required', 'string', 'max:120'],
            'experiences' => ['required', 'array', 'size:4'],
            'experiences.*.title' => ['required', 'string', 'max:255'],
            'experiences.*.region' => ['required', 'string', 'max:120'],
            'experiences.*.summary' => ['required', 'string'],
            'experiences.*.image' => ['required', 'string', 'max:255'],
            'experiences.*.cta' => ['required', 'string', 'max:120'],
            'faqs' => ['required', 'array', 'size:3'],
            'faqs.*.question' => ['required', 'string', 'max:255'],
            'faqs.*.answer' => ['required', 'string'],
            'faqs.*.image' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'remove_logo' => ['nullable', 'boolean'],
        ]);

        $homepageContentManager->save(
            Arr::except($validated, ['logo', 'remove_logo']),
            $request->file('logo'),
            $request->boolean('remove_logo'),
        );

        return redirect()
            ->to(route('dashboard').'#content-editor')
            ->with('status', 'Homepage content saved.');
    }
}
