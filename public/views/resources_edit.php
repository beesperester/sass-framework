<?php

$tags = [
  [
    'id' => 1,
    'label' => 'tileable'
  ],
  [
    'id' => 2,
    'label' => 'soil'
  ],
  [
    'id' => 3,
    'label' => 'grass'
  ],
  [
    'id' => 4,
    'label' => 'mud'
  ],
  [
    'id' => 5,
    'label' => 'grunge'
  ],
  [
    'id' => 6,
    'label' => 'dirt'
  ],
  [
    'id' => 7,
    'label' => 'stone'
  ],
  [
    'id' => 8,
    'label' => 'rock'
  ],
  [
    'id' => 9,
    'label' => 'grass'
  ],
  [
    'id' => 10,
    'label' => 'marble'
  ]
];

$resource_name = 'Awesome-Resource-01';

?>

<div class="u-gutter u-spacing">

  <ul class="o-list o-list--inline u-rythm--horizontal t-text--align-right">

    <li class="o-list__item">

      <a href="#" title="Close">

        <svg class="o-icon">

          <use xlink:href="#cross" />

        </svg>

      </a>

    </li>

  </ul>

</div>

<div class="u-rythm--vertical-medium">

  <div class="u-gutter">

    <h1>Edit <?= $resource_name ?></h1>

  </div>

  <div class="u-gutter">

    <h2>General</h2>

    <form class="o-form u-rythm--vertical">

      <div class="o-form__row o-form__row--collapse o-grid o-grid--align-items-flex-end">

        <div class="o-form__field o-grid__item">

          <label for="label">Name</label>

          <input type="text" name="label" value="<?= $resource_name ?>" placeholder="Label" />

        </div>

        <div class="o-form__field t-text--align-right o-grid__item--fixed">

          <button>Save</button>

        </div>

      </div>

    </form>

  </div>

  <div class="u-gutter">

    <h2>Tags</h2>

    <div class="o-float c-tags">

      <?php foreach($tags as $tag): ?>

      <div class="o-float__item c-tags__item c-tag c-tag--<?= $tag['id'] ?>">

        <?= $tag['label'] ?>

        <a class="o-link o-link--neutral o-link--icon c-tag__action" href="#">

          <svg class="o-icon o-icon--tiny">

            <use xlink:href="#cross" />

          </svg>

        </a>

      </div>

      <?php endforeach; ?>

    </div>

  </div>

  <div class="u-gutter">

    <form class="o-form">

      <div class="o-form__row o-form__row--collapse o-grid">

        <div class="o-form__field o-grid__item o-grid__item--expand">

          <input type="text" name="tag" value="" placeholder="Tag" />

        </div>

        <div class="o-form__field o-grid__item o-grid__item--fixed">

          <button>Add</button>

        </div>

      </div>

    </form>

  </div>

  <div class="u-gutter">

    <h2>Files</h2>

  </div>

  <div class="t-paint--ice">

    <ul class="o-menubar o-list o-list--inline">

      <li class="o-menubar__item o-list__item"><a href="#" class="o-link o-link--active">Diffuse</a></li>

      <li class="o-menubar__item o-list__item"><a href="#" class="o-link">Bump</a></li>

    </ul>

  </div>

  <div class="">

    <?php

    $groups = [];

    for ($i = 0; $i < rand(2, 4); $i++) {
      $versions = [];

      for ($t = 0; $t < rand(1, 6); $t++) {
        array_push($versions, $files[array_rand($files)]);
      }

      array_push($groups, $versions);
    }

    ?>

    <ul class="t-separator--beveled o-list o-list--nostyle c-resourcelist">

      <?php foreach (array_values($groups) as $group): ?>

      <?php

      $first_file_version = count($group);
      $first_file = array_shift($group);

      ?>

      <li class="c-resourcelist__item u-gutter u-spacing">

        <div class="o-grid o-grid--align-items-center u-rythm--horizontal">

          <div class="o-grid__item o-grid__item--fixed">

            <div class="o-picture o-picture--tiny o-picture--framed">

              <div class="o-picture__wrapper">

                <div class="o-picture__frame">

                  <div class="o-picture__item">

                    <div class="o-picture__icon">

                      <svg class="o-icon o-icon--medium">

                        <use xlink:href="#image" />

                      </svg>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="o-grid__item">

            <div class="t-text--emphasis">

              <?= $resource_name ?>.diffuse.<?= $first_file['extension']['label'] ?>

            </div>

            <div class="t-text--detail">

              <dl>

                <dt>Version</dt>
                <dd><?= sprintf('%03d', $first_file_version) ?></dd>

                <dt>Mimetype</dt>
                <dd><?= $first_file['extension']['mimetype'] ?></dd>

                <dt>Filesize</dt>
                <dd><?= $first_file['filesize'] ?>kb</dd>

              </dl>

            </div>

          </div>

          <div class="o-grid__item o-grid__item--fixed">

            <ul class="o-list o-list--inline u-rythm--horizontal">

              <li class="o-list__item">

                <a href="#show-file" class="o-link o-link--info" title="Show File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#folder" />

                  </svg>

                </a>

              </li>

              <li class="o-list__item">

                <a href="#" class="o-link o-link--info" title="Download File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#download" />

                  </svg>

                </a>

              </li>

              <li class="o-list__item">

                <a href="#edit-file" class="o-link o-link--info" title="Edit File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#pencil" />

                  </svg>

                </a>

              </li>

              <li class="o-list__item">

                <a href="#" class="o-link o-link--alert" title="Delete File">

                  <svg class="o-icon o-icon--small">

                    <use xlink:href="#bin" />

                  </svg>

                </a>

              </li>

            </ul>

          </div>

        </div>

      </li>

      <?php endforeach; ?>

    </ul>

  </div>

</div>
