const gulp  = require('gulp');
const shell = require('gulp-shell');
const fs    = require('fs');

gulp.task('default', () => {
    gulp.watch('./spec/**/*.php', gulp.series('runtests'));
    gulp.watch('./src/**/*.php', gulp.series('runtests'));
    fs.writeFile("autocommit_counter", "1", {flag: 'wx'}, () => {});
});

gulp.task(
    'runtests',
    shell.task(
        [
            'vendor/bin/phpspec run --no-code-generation',
            'git add src/ spec/',
            'git commit -m "Advent of Code 2017 - Day 2 - TDD #`cat autocommit_counter`"',
            'count=`cat autocommit_counter` && let "count++" && echo $count > autocommit_counter'
        ]
    )
);
