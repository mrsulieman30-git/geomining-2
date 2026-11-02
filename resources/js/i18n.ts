import { createI18n } from 'vue-i18n';

const messages = {
    en: {
        welcome: 'Enterprise Mining System',
        dashboard: 'Dashboard',
        home: 'Home',
        services: 'Services',
        laboratory: 'Laboratory',
        contact: 'Contact',
    },
    ar: {
        welcome: 'نظام التعدين المؤسسي',
        dashboard: 'لوحة القيادة',
        home: 'الرئيسية',
        services: 'الخدمات',
        laboratory: 'المختبر',
        contact: 'اتصل بنا',
    },
    so: {
        welcome: 'Nidaamka Macdanta ee Shirkadda',
        dashboard: 'Dashboard-ka',
        home: 'Bogga Hore',
        services: 'Adeegyada',
        laboratory: 'Shaybaarka',
        contact: 'Nala Xiriir',
    }
};

export const i18n = createI18n({
    legacy: false,
    locale: 'en',
    fallbackLocale: 'en',
    messages,
});
