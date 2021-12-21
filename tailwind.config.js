module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    screens: {

        'sm': {'min': '375px', 'max': '767px'},
    },

    colors: {
       'dark-100': '#010414',
       'dark-60' : '#808189',
       'dark-fff': '#ffffff',
       'brand-primery': '#2029F3',
       'brand-secondary' : '#0FBA68',
       'system-error' : '#CC1E1E',
       'system-succes': '#249E2C',
       'inner-border' : '#E6E6E7',
    },
    fontSize: {
        xxl: ['1.563rem', { lineHeight: '1.891rem' }],
        xxm: ['1rem', { lineHeight: '1.21rem' }],
        xxs: ['0.875rem', { lineHeight: '1.059rem' }],
        18: '1.125rem',
    },
    extend: {
        spacing: {
            8: '0.5rem',
            16: '1rem',
            18: '1.125rem',
            20: '1.25rem',
            24: '1.5rem',
            25: '1.563rem',
            26: '1.625rem',
            30: '3.75rem',
            40: '2.5rem',
            43: '2.688rem',
            48: '3rem',
            56: '3.5rem',
            94: '5.875rem',
            107: '6.688rem',
            108: '6.75rem',
            148: '9.25rem',
            214: '13.375rem',
            252: '15.75rem',
            337: '21.063rem',
            343: '21.438rem',
            392: '24.5rem',
            900: '64.9rem',
        },

    },
  },
  plugins: [],
}
