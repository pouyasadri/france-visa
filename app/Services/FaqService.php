<?php

namespace App\Services;

use App\Services\StructuredData\FAQSchema;

class FaqService
{
    protected array $faqs = [];

    /**
     * Add a FAQ item
     */
    public function add(string $question, string $answer): self
    {
        $this->faqs[] = [
            'question' => $question,
            'answer' => $answer,
        ];

        return $this;
    }

    /**
     * Add multiple FAQs
     */
    public function addMultiple(array $faqs): self
    {
        foreach ($faqs as $faq) {
            $this->add($faq['question'], $faq['answer']);
        }

        return $this;
    }

    /**
     * Get all FAQs
     */
    public function get(): array
    {
        return $this->faqs;
    }

    /**
     * Generate FAQ schema
     */
    public function getSchema(): FAQSchema
    {
        $schema = new FAQSchema;
        $schema->addQuestions($this->faqs);

        return $schema;
    }

    /**
     * Common FAQs for immigration/consulting (English)
     */
    public static function immigrationFaqsEN(): array
    {
        return [
            [
                'question' => 'How long does it take to get a student visa for France?',
                'answer' => 'The student visa process typically takes 2-4 weeks after you submit your application to Campus France. However, we recommend starting the process at least 3 months before your intended travel date to allow time for document preparation and any potential delays.',
            ],
            [
                'question' => 'Can I work while studying in France with a student visa?',
                'answer' => 'Yes, international students in France can work up to 964 hours per year (approximately 20 hours per week during the academic year). This allows you to gain work experience and supplement your income while studying.',
            ],
            [
                'question' => 'What documents do I need for a French residence permit?',
                'answer' => 'Required documents typically include a valid passport, proof of accommodation, proof of financial resources, health insurance, birth certificate (translated and legalized), and specific documents based on your residence permit category (work, study, family reunion, etc.).',
            ],
            [
                'question' => 'How much does it cost to buy property in France?',
                'answer' => 'In addition to the property price, budget for notary fees (7-8% of purchase price), agency fees (3-10%), and potential renovation costs. Our team can help you understand all costs involved and find properties within your budget.',
            ],
            [
                'question' => 'Do I need to speak French to study or live in France?',
                'answer' => 'While many graduate programs are offered in English, learning French is highly recommended for daily life, career opportunities, and cultural integration. We can connect you with language learning resources and programs.',
            ],
        ];
    }

    /**
     * Common FAQs for immigration/consulting (French)
     */
    public static function immigrationFaqsFR(): array
    {
        return [
            [
                'question' => 'Combien de temps faut-il pour obtenir un visa étudiant pour la France?',
                'answer' => 'Le processus de visa étudiant prend généralement 2 à 4 semaines après avoir soumis votre demande à Campus France. Cependant, nous recommandons de commencer le processus au moins 3 mois avant votre date de voyage prévue.',
            ],
            [
                'question' => 'Puis-je travailler pendant mes études en France avec un visa étudiant?',
                'answer' => 'Oui, les étudiants internationaux en France peuvent travailler jusqu\'à 964 heures par an (environ 20 heures par semaine pendant l\'année académique).',
            ],
            [
                'question' => 'Quels documents dois-je fournir pour un titre de séjour français?',
                'answer' => 'Les documents requis incluent généralement un passeport valide, une preuve de logement, une preuve de ressources financières, une assurance maladie, un acte de naissance (traduit et légalisé), et des documents spécifiques selon votre catégorie de titre de séjour.',
            ],
        ];
    }

    /**
     * Common FAQs for immigration/consulting (Farsi)
     */
    public static function immigrationFaqsFA(): array
    {
        return [
            [
                'question' => 'چقدر طول می‌کشد تا ویزای تحصیلی فرانسه دریافت کنم؟',
                'answer' => 'روند دریافت ویزای تحصیلی معمولاً ۲ تا ۴ هفته پس از ارسال درخواست شما به Campus France طول می‌کشد. با این حال، توصیه می‌کنیم حداقل ۳ ماه قبل از تاریخ سفر مورد نظر، روند را آغاز کنید.',
            ],
            [
                'question' => 'آیا می‌توانم با ویزای دانشجویی در فرانسه کار کنم؟',
                'answer' => 'بله، دانشجویان بین‌المللی در فرانسه می‌توانند تا ۹۶۴ ساعت در سال (تقریباً ۲۰ ساعت در هفته در طول سال تحصیلی) کار کنند.',
            ],
            [
                'question' => 'چه مدارکی برای اقامت فرانسه نیاز است؟',
                'answer' => 'مدارک مورد نیاز معمولاً شامل گذرنامه معتبر، اثبات محل سکونت، اثبات منابع مالی، بیمه درمانی، شناسنامه (ترجمه شده و تأیید شده) و مدارک خاص بر اساس نوع اقامت شما می‌باشد.',
            ],
        ];
    }
}
