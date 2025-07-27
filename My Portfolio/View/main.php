<main>
  <!-- Education Section -->
  <section>
    <h2>Education</h2>
    <ul>
      <?php foreach ($data["education"] as $edu): ?>
        <li>
          <strong><?= $edu["degree"] ?></strong>
          <?php if (isset($edu["major_minor"])): ?>
            <br><?= $edu["major_minor"] ?>
          <?php endif; ?>
          <br>GPA: <?= $edu["gpa"] ?> (<?= $edu["year"] ?>)
          <br><?= $edu["institute"] ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- Skills Section -->
  <section>
    <h2>Technical Skills</h2>
    <p><strong>Languages:</strong> <?= implode(", ", $data["skills"]["languages"]) ?></p>
    <p><strong>Web Development:</strong> <?= implode(", ", $data["skills"]["web"]) ?></p>
    <p><strong>Database:</strong> <?= $data["skills"]["database"] ?></p>
    <p><strong>Tools & Platforms:</strong> <?= implode(", ", $data["skills"]["tools"]) ?></p>
  </section>

  <!-- Projects Section -->
  <section>
    <h2>Projects</h2>
    <ul>
      <?php foreach ($data["projects"] as $project): ?>
        <li>
          <strong><?= $project["title"] ?></strong> – <?= $project["type"] ?>
          <?php if (!empty($project["tech"])): ?>
            <br><em>Technology:</em> <?= $project["tech"] ?>
          <?php endif; ?>
          <br><a href="<?= $project["link"] ?>" class="btn" target="_blank">🔗 View on GitHub</a>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- Achievements Section -->
  <section>
    <h2>Academic Achievements</h2>
    <ul>
      <?php foreach ($data["achievements"] as $ach): ?>
        <li><?= $ach ?></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- References Section -->
  <section>
    <h2>References</h2>
    <?php foreach ($data["references"] as $ref): ?>
      <p>
        <strong><?= $ref["name"] ?></strong><br>
        <?= $ref["title"] ?><br>
        Email: <?= $ref["email"] ?><br>
        Phone: <?= $ref["phone"] ?>
      </p>
    <?php endforeach; ?>
  </section>

  <!-- Download CV Section -->
  <section>
    <h2>Download My CV</h2>
    <a href="assets/Raian_Tasnim_Saoda_CV.pdf" download>
      <button>📄 Download PDF</button>
    </a>
  </section>
</main>
