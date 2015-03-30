<h1>Glossary</h1>
<p>
    <input type="text" onkeyup="listFilter(this, $('#glossary'));" placeholder="Search" />
</p>
<ul id="glossary">
    <?php
    function dict_cmp($a, $b) {
        return strcmp($a['word'], $b['word']);
    }

    $dict = array(
        array(
            'word' => 'Data Science',
            'definition' => 'The extraction of knowledge from data.',
            'see' => '?id=2'
        ),
        array(
            'word' => 'Bachelor',
            'definition' => 'The first phase of a degree at an university.'
        ),
        array(
            'word' => 'Bachelor College',
            'definition' => 'The first phase of a degree at an university.',
            'see' => '?id=3'
        ),
        array(
            'word' => 'Major',
            'definition' => 'The main route throughout the educational program.',
            'see' => '?id=6'
        ),
        array(
            'word' => 'Elective',
            'definition' => 'Subjects that are free to choose.',
            'see' => '?id=4'
        ),
        array(
            'word' => 'Engineer',
            'definition' => 'An engineer is a professional practitioner who uses scientific knowledge, mathematics, physics, astronomy, propulsion technology, materials science, structural analysis, manufacturing and ingenuity to solve practical problems.'
        ),
        array(
            'word' => 'Master',
            'definition' => 'The second phase of a degree at an university.',
            'see' => '?id=10'
        )
    );

    usort($dict, "dict_cmp");

    foreach ($dict as $entry) {
        echo '<li><h3>' . $entry['word'] . '</h3><p>' . $entry['definition'] . '</p>';
        if (isset($entry['see'])) {
            echo '<p><a href="' . $entry['see'] . '">See also</a></p>';
        }
        echo '</li>';
    }
    ?>
</ul>