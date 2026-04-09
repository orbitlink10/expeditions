<div class="editor-grid">
    <article class="editor-card editor-card--wide" id="editor-section-copy" data-editor-section>
        <div class="dashboard-panel__head">
            <div>
                <p class="dashboard-panel__eyebrow">Section copy</p>
                <h3>Journeys, experiences, FAQ and footer</h3>
            </div>
        </div>

        <div class="editor-fields editor-fields--two">
            <label class="editor-field">
                <span>Journeys kicker</span>
                <input type="text" name="journeysSection[kicker]" value="{{ old('journeysSection.kicker', $homepageContent['journeysSection']['kicker']) }}">
            </label>

            <label class="editor-field">
                <span>Journeys title</span>
                <input type="text" name="journeysSection[title]" value="{{ old('journeysSection.title', $homepageContent['journeysSection']['title']) }}">
            </label>

            <label class="editor-field editor-field--full">
                <span>Journeys intro</span>
                <textarea name="journeysSection[intro]" rows="3">{{ old('journeysSection.intro', $homepageContent['journeysSection']['intro']) }}</textarea>
            </label>

            <label class="editor-field">
                <span>Experiences kicker</span>
                <input type="text" name="experiencesSection[kicker]" value="{{ old('experiencesSection.kicker', $homepageContent['experiencesSection']['kicker']) }}">
            </label>

            <label class="editor-field">
                <span>Experiences title</span>
                <input type="text" name="experiencesSection[title]" value="{{ old('experiencesSection.title', $homepageContent['experiencesSection']['title']) }}">
            </label>

            <label class="editor-field editor-field--full">
                <span>Experiences intro</span>
                <textarea name="experiencesSection[intro]" rows="3">{{ old('experiencesSection.intro', $homepageContent['experiencesSection']['intro']) }}</textarea>
            </label>

            <label class="editor-field">
                <span>Tailor band kicker</span>
                <input type="text" name="tailorBand[kicker]" value="{{ old('tailorBand.kicker', $homepageContent['tailorBand']['kicker']) }}">
            </label>

            <label class="editor-field">
                <span>Tailor band button</span>
                <input type="text" name="tailorBand[buttonLabel]" value="{{ old('tailorBand.buttonLabel', $homepageContent['tailorBand']['buttonLabel']) }}">
            </label>

            <label class="editor-field editor-field--full">
                <span>Tailor band title</span>
                <textarea name="tailorBand[title]" rows="3">{{ old('tailorBand.title', $homepageContent['tailorBand']['title']) }}</textarea>
            </label>

            <label class="editor-field editor-field--full">
                <span>Tailor band body</span>
                <textarea name="tailorBand[body]" rows="3">{{ old('tailorBand.body', $homepageContent['tailorBand']['body']) }}</textarea>
            </label>

            <label class="editor-field">
                <span>FAQ kicker</span>
                <input type="text" name="faqSection[kicker]" value="{{ old('faqSection.kicker', $homepageContent['faqSection']['kicker']) }}">
            </label>

            <label class="editor-field">
                <span>FAQ title</span>
                <input type="text" name="faqSection[title]" value="{{ old('faqSection.title', $homepageContent['faqSection']['title']) }}">
            </label>

            <label class="editor-field editor-field--full">
                <span>FAQ intro</span>
                <textarea name="faqSection[intro]" rows="3">{{ old('faqSection.intro', $homepageContent['faqSection']['intro']) }}</textarea>
            </label>

            <label class="editor-field editor-field--full">
                <span>Footer intro</span>
                <textarea name="footer[intro]" rows="3">{{ old('footer.intro', $homepageContent['footer']['intro']) }}</textarea>
            </label>

            <label class="editor-field">
                <span>Floating chat title</span>
                <input type="text" name="footer[chatTitle]" value="{{ old('footer.chatTitle', $homepageContent['footer']['chatTitle']) }}">
            </label>

            <label class="editor-field">
                <span>Floating chat body</span>
                <input type="text" name="footer[chatBody]" value="{{ old('footer.chatBody', $homepageContent['footer']['chatBody']) }}">
            </label>
        </div>
    </article>

    <article class="editor-card editor-card--wide" id="editor-destinations" data-editor-section>
        <div class="dashboard-panel__head">
            <div>
                <p class="dashboard-panel__eyebrow">Destination cards</p>
                <h3>Homepage destination highlights</h3>
            </div>
        </div>

        <div class="editor-repeater-grid">
            @foreach ($homepageContent['destinations'] as $index => $destination)
                <article class="editor-repeater">
                    <h4>Destination {{ $loop->iteration }}</h4>
                    <div class="editor-fields">
                        <label class="editor-field">
                            <span>Title</span>
                            <input type="text" name="destinations[{{ $index }}][title]" value="{{ old("destinations.$index.title", $destination['title']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Region</span>
                            <input type="text" name="destinations[{{ $index }}][region]" value="{{ old("destinations.$index.region", $destination['region']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Summary</span>
                            <textarea name="destinations[{{ $index }}][summary]" rows="4">{{ old("destinations.$index.summary", $destination['summary']) }}</textarea>
                        </label>

                        <label class="editor-field">
                            <span>CTA label</span>
                            <input type="text" name="destinations[{{ $index }}][cta]" value="{{ old("destinations.$index.cta", $destination['cta']) }}">
                        </label>

                        <input type="hidden" name="destinations[{{ $index }}][image]" value="{{ old("destinations.$index.image", $destination['image']) }}">
                    </div>
                </article>
            @endforeach
        </div>
    </article>

    <article class="editor-card editor-card--wide" id="editor-journeys" data-editor-section>
        <div class="dashboard-panel__head">
            <div>
                <p class="dashboard-panel__eyebrow">Signature journeys</p>
                <h3>Journey cards</h3>
            </div>
        </div>

        <div class="editor-repeater-grid">
            @foreach ($homepageContent['signatureJourneys'] as $index => $journey)
                <article class="editor-repeater">
                    <h4>Journey {{ $loop->iteration }}</h4>
                    <div class="editor-fields">
                        <label class="editor-field">
                            <span>Tag</span>
                            <input type="text" name="signatureJourneys[{{ $index }}][tag]" value="{{ old("signatureJourneys.$index.tag", $journey['tag']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Price/meta</span>
                            <input type="text" name="signatureJourneys[{{ $index }}][meta]" value="{{ old("signatureJourneys.$index.meta", $journey['meta']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Duration</span>
                            <input type="text" name="signatureJourneys[{{ $index }}][duration]" value="{{ old("signatureJourneys.$index.duration", $journey['duration']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Title</span>
                            <input type="text" name="signatureJourneys[{{ $index }}][title]" value="{{ old("signatureJourneys.$index.title", $journey['title']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Summary</span>
                            <textarea name="signatureJourneys[{{ $index }}][summary]" rows="4">{{ old("signatureJourneys.$index.summary", $journey['summary']) }}</textarea>
                        </label>

                        <label class="editor-field">
                            <span>CTA label</span>
                            <input type="text" name="signatureJourneys[{{ $index }}][cta]" value="{{ old("signatureJourneys.$index.cta", $journey['cta']) }}">
                        </label>

                        <input type="hidden" name="signatureJourneys[{{ $index }}][image]" value="{{ old("signatureJourneys.$index.image", $journey['image']) }}">
                    </div>
                </article>
            @endforeach
        </div>
    </article>

    <article class="editor-card editor-card--wide" id="editor-experiences" data-editor-section>
        <div class="dashboard-panel__head">
            <div>
                <p class="dashboard-panel__eyebrow">Experiences</p>
                <h3>Experience cards</h3>
            </div>
        </div>

        <div class="editor-repeater-grid">
            @foreach ($homepageContent['experiences'] as $index => $experience)
                <article class="editor-repeater">
                    <h4>Experience {{ $loop->iteration }}</h4>
                    <div class="editor-fields">
                        <label class="editor-field">
                            <span>Title</span>
                            <input type="text" name="experiences[{{ $index }}][title]" value="{{ old("experiences.$index.title", $experience['title']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Region</span>
                            <input type="text" name="experiences[{{ $index }}][region]" value="{{ old("experiences.$index.region", $experience['region']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Summary</span>
                            <textarea name="experiences[{{ $index }}][summary]" rows="4">{{ old("experiences.$index.summary", $experience['summary']) }}</textarea>
                        </label>

                        <label class="editor-field">
                            <span>CTA label</span>
                            <input type="text" name="experiences[{{ $index }}][cta]" value="{{ old("experiences.$index.cta", $experience['cta']) }}">
                        </label>

                        <input type="hidden" name="experiences[{{ $index }}][image]" value="{{ old("experiences.$index.image", $experience['image']) }}">
                    </div>
                </article>
            @endforeach
        </div>
    </article>

    <article class="editor-card editor-card--wide" id="editor-faqs" data-editor-section>
        <div class="dashboard-panel__head">
            <div>
                <p class="dashboard-panel__eyebrow">FAQs</p>
                <h3>Question cards</h3>
            </div>
        </div>

        <div class="editor-repeater-grid">
            @foreach ($homepageContent['faqs'] as $index => $faq)
                <article class="editor-repeater">
                    <h4>FAQ {{ $loop->iteration }}</h4>
                    <div class="editor-fields">
                        <label class="editor-field">
                            <span>Question</span>
                            <input type="text" name="faqs[{{ $index }}][question]" value="{{ old("faqs.$index.question", $faq['question']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Answer</span>
                            <textarea name="faqs[{{ $index }}][answer]" rows="4">{{ old("faqs.$index.answer", $faq['answer']) }}</textarea>
                        </label>

                        <input type="hidden" name="faqs[{{ $index }}][image]" value="{{ old("faqs.$index.image", $faq['image']) }}">
                    </div>
                </article>
            @endforeach
        </div>
    </article>
</div>
